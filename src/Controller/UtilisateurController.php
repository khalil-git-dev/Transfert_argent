<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class UtilisateurController extends AbstractController
{
    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = new Utilisateur();
        //$user = $this->getUtilisateur();
        return $this->json([
            'email' => $user->getEmail(),
            'roles' => $user->getRoles()
        ]);
    }

    // /** 
    //  * @Route("/user_bloquer", name="updatparten", methods={"POST"})
    //  */
    // public function userBloquer(Request $request, UserRepository $userRepo, EntityManagerInterface $entityManager): Response
    // {
    //     $values = json_decode($request->getContent());
    //     $user = $userRepo->findOneByUsername($values->username);
    //     echo $user->getStatut();
    //     if ($user->getStatut()=="bloquer") {
    //         if ($user->getProfil()=="admin") {
    //             $user->setRoles(["ADMIN_PARTENAIRE"]);
    //         } elseif ($user->getProfil()=="user") {
    //             $user->setRoles(["USER_PARTENAIRE"]);
    //         }
    //         $user->setStatut("debloquer");
    //     } else {
    //         $user->setStatut("bloquer");
    //         $user->setRoles(["ROLE_USERLOCK"]);
        
    //         $entityManager->flush();
    //         $data = [
    //         'status' => 200,
    //         'message' => 'utilisateur a changé de statut (bloqué)'
    //     ];
    //         return new JsonResponse($data);
    //     }
    // }
    // /** 
    // * @Route("/debloquer", name="updat", methods={"POST"})
    // */
    // public function userdeBloquer(Request $request, UserRepository $userRepo,EntityManagerInterface $entityManager): Response
    // {
    //     $values = json_decode($request->getContent());
    //     $user=$userRepo->findOneByUsername($values->username);
    //     $user->getStatut();
    //     $user->setStatut("debloquer");
    //     $user->setRoles(["ADMIN_PARTENAIRE"]);
    //     $entityManager->flush();
    //     $data = [
    //         'status' => 200,
    //         'message' => 'utilisateur a changé de statut (débloqué)'
    //     ];
    //     return new JsonResponse($data);
    // }
    
    
}
