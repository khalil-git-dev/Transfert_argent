<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{
    /**
     * @Route("/auth", name="auth")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // $em = $this->getDoctrine()->getManager();

        // $email = $request->request->get('khalildiop@gmail.com');
        // $password = $request->request->get('khalil');
        // $roles = $request->request->get('role_sup_admin');

        // if (!$roles) {
        //     $roles = json_encode([]);
        // }

        // $user = new Utilisateur($email);
        // $user->setPassword($encoder->encodePassword($user, $password));
        // $user->setRoles(($roles));
        // $em->persist($user);
        // $em->flush();

        // return new Response(sprintf('User %s successfully created', $user->getUsername()));
    }
}
