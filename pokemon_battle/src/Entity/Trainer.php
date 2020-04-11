<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainerRepository")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="L'email que vous avez indiqué est déjà utilisé."
 * )
 * @UniqueEntity(
 *  fields={"username"},
 *  message="Le pseudo que vous avez indiqué est déjà utilisé."
 * )
 */
class Trainer implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire au moins 8 caractères")
     * 
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password", message="Vos mots de passe doivent être identiques !")
     */
    public $confirm_password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Team", mappedBy="trainer")
     */
    private $teams;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    public function __construct()
    {
        $this->teams = new ArrayCollection();
    }

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function eraseCredentials() {}

    public function getSalt() {}

    public function getRoles() : array
    {
        $admin = 'Red';
        $username = $this->getUsername();

        if ($username == $admin) {
            $roles[] = 'ROLE_ADMIN';
        }
        else {
            $roles[] = 'ROLE_USER';
        }
        return array_unique($roles);
    }
    
    /**
     * @return Collection|Team[]
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->teams->contains($team)) {
            $this->teams[] = $team;
            $team->setTrainer($this);
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->teams->contains($team)) {
            $this->teams->removeElement($team);
            // set the owning side to null (unless already changed)
            if ($team->getTrainer() === $this) {
                $team->setTrainer(null);
            }
        }

        return $this;
    }

    public function __tostring()
    {
        
        return $this->username;
    }
}
