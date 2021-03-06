<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ApiResource()
 * collectionOperations={
 *          "get"={"security"="is_Granted(['ROLE_SUP_ADMIN','ROLE_SUP_ADMIN'])",
 *          "normalisation_context"={"group"={"get"}},
 *      },
 *           "CreateAdmin"={
 *           "method"="POST",
 *           "path"="/api/utilisateurs",
 *              "security"="is_Granted('ROLE_SUP_ADMIN')",
 *              "security_message"="Acces refuse. Seul Admin System peut creer un admin"
 *      },
 *           "CreateCaissier"={
 *           "method"="POST",
 *           "path"="/api/utilisateurs",
 *              "security"="is_Granted(['ROLE_SUP_ADMIN','ROLE_ADMIN'])",
 *              "security_message"="Acces refuse. Seul Admin Systeme ou Admin peuvent creer un caissier"
 *      },
 *      itemOperations={
 *          "get"={
 *              "path"="/utilisateurs/{id}",
 *              "security"="is_Granted('ROLE_SUP_ADMIN')",
 *              "normalisation_context"={"group"={"get"}}
 *          },
 *           "put"={
 *              "path"="/api/utilisateurs/{id}",
 *              "security"="is_Granted('ROLE_SUP_ADMIN')",
 *              "security_message"="Acces refuse. Seul Admin System peut bloquer un admin"
 *           }
 *      }
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur implements AdvancedUserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Profile", inversedBy="utilisateurs")
     */
    private $role;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getRole(): ?Profile
    {
        return $this->role;
    }

    public function setRole(?Profile $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }


            ########  Pour le bloquage des utilisateurs  #########

    public function isAccountNonExpired(){
        return true;
    }
    public function isAccountNonLocked(){
        return true;
    }
    public function isCredentialsNonExpired()
    {
        return true;
    }
    public function isEnabled(){
        return $this->isActive;
    }
        
        
}
