<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private ?string $email = null;

    /**
     * @ORM\Column(type="string")
     */
    private ?string $password = null;

    // Getter pour l'ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter et setter pour l'email
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    // Getter et setter pour le mot de passe
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    // Implémentation obligatoire de la méthode de UserInterface pour récupérer l'identifiant de l'utilisateur
    public function getUserIdentifier(): string
    {
        return (string) $this->email;  // Ici on utilise l'email comme identifiant unique
    }

    // Implémentation obligatoire de la méthode de UserInterface pour récupérer les rôles de l'utilisateur
    public function getRoles(): array
    {
        // On retourne un tableau avec les rôles de l'utilisateur, ici 'ROLE_USER' par défaut
        return ['ROLE_USER'];
    }

    // Méthode obligatoire de PasswordAuthenticatedUserInterface pour effacer les informations sensibles
    public function eraseCredentials(): void
    {
        // Cette méthode peut être laissée vide si on n'a pas de données sensibles à effacer
    }
}
