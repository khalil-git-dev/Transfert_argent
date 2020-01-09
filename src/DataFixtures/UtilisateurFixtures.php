<?php

namespace App\DataFixtures;

use App\Entity\Profile;
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
        $supAdmin = new Profile();
        $supAdmin->setLibelle("ROLE_SUP_ADMIN");
        $manager->persist($supAdmin);

        $Admin = new Profile();
        $Admin->setLibelle("ROLE_ADMIN");
        $manager->persist($Admin);

        $Caissier = new Profile();
        $Caissier->setLibelle("ROLE_CAISSIER");
        $manager->persist($Caissier);

        $manager->flush();

        $this->addReference('role_sup_admin', $supAdmin);
        $this->addReference('role_admin', $Admin);
        $this->addReference('role_caissier', $Caissier);

        $rolAdmin = $this->getReference('role_sup_admin');
        $rolSupAdmin = $this->getReference('role_admin');
        $rolCaissier = $this->getReference('role_caissier');
        
        $user = new Utilisateur();
        
        $user->setEmail("khalil@gmail.com");
        $user->setPassword($this->passwordEncoder->encodePassword($user, "khalil"));
        $user->setRoles(["ROLE_SUP_ADMIN", "ROLE_ADMIN", "ROLE_CAISSIER"]);
        $user->setRole($rolAdmin);

        $manager->persist($user);
        $manager->flush();
    }

}
