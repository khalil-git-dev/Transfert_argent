<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/api")
*/
class AuthController extends AbstractController
{
    /**
     * @Route("/enregistrer", name="enregistrer_user", methods={"POST"})
     */
    public function enregistrer(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, SerializerInterface $serializer, ValidatorInterface $validator)
    {
        $values = json_decode($request->getContent());
        if(isset($values->username,$values->password)) {
            $user = new Utilisateur();
            $user->setEmail($values->username);
            $user->setPassword($passwordEncoder->encodePassword($user, $values->password));
            
            // recuperer id profil  
            $reposit = $this->getDoctrine()->getRepository(Profile::class);
            $profils = $reposit->find($values->libelle);
            $user->setRole($profils);
            $role = [];
            if ($profils->getLibelle() == "ROLE_ADMIN") {
                $role = (["ROLE_ADMIN"]);
            } elseif ($profils->getLibelle() == "ROLE_CAISSIER") {
                $role = (["ROLE_CAISSIER"]);
            } elseif ($profils->getLibelle() == "ROLE_ADMIN_SYSTEM") {
                $role = (["ROLE_ADMIN_SYSTEM"]);
            }
            
            $user->setRoles($role);
            $user->setLogin($values->login);
            $user->setEmail($values->email);
           
            $errors = $validator->validate($user);
            if(count($errors)) {
                $errors = $serializer->serialize($errors, 'json');
                return new Response($errors, 500, [
                    'Content-Type' => 'application/json'
                ]);
            }
            $entityManager->persist($user);
            $entityManager->flush();

            $data = [
                'status' => 201,
                'message' => 'L\'utilisateur a été créé'
            ];

            return new JsonResponse($data, 201);
        }
        $data = [
            'status' => 500,
            'message' => 'Vous devez renseigner les clés username et password'
        ];
        return new JsonResponse($data, 500);
    }
}
