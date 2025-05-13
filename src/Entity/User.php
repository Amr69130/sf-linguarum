<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    /**
     * @var Collection<int, ProposedLanguage>
     */
    #[ORM\OneToMany(targetEntity: ProposedLanguage::class, mappedBy: 'user', orphanRemoval: true)]
    private Collection $proposedLanguages;

    public function __construct()
    {
        $this->proposedLanguages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials(): void
    {
        // Clear sensitive data
    }

    // Getter and Setter for firstname
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    // Getter and Setter for lastname
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return Collection<int, ProposedLanguage>
     */
    public function getProposedLanguages(): Collection
    {
        return $this->proposedLanguages;
    }

    public function addProposedLanguage(ProposedLanguage $proposedLanguage): static
    {
        if (!$this->proposedLanguages->contains($proposedLanguage)) {
            $this->proposedLanguages->add($proposedLanguage);
            $proposedLanguage->setUser($this);
        }

        return $this;
    }

    public function removeProposedLanguage(ProposedLanguage $proposedLanguage): static
    {
        if ($this->proposedLanguages->removeElement($proposedLanguage)) {
            // set the owning side to null (unless already changed)
            if ($proposedLanguage->getUser() === $this) {
                $proposedLanguage->setUser(null);
            }
        }

        return $this;
    }
}
