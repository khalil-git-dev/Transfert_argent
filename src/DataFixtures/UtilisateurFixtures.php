<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UtilisateurFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new Utilisateur();

        // $user->setNom("diop");
        // $user->setPrenom("khalil");
        $user->setEmail("khalildiop@gmail.com");
        $user->setPassword($this->passwordEncoder->encodePassword($user, "diop_12345"));
        $user->setRoles(json_encode(array("SUPER_ADMIN")));
        $user->setRole();
        
        $manager->persist($user);
        $manager->flush();
    }
}
