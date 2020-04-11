<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pokemon")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pokemon;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trainer", inversedBy="teams")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trainer;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $nickname;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Attack")
     */
    private $attacks;

    public function __construct()
    {
        $this->attack = new ArrayCollection();
        $this->attacks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon(): ?Pokemon
    {
        return $this->pokemon;
    }

    public function setPokemon(?Pokemon $pokemon): self
    {
        $this->pokemon = $pokemon;

        return $this;
    }

    public function getTrainer(): ?Trainer
    {
        return $this->trainer;
    }

    public function setTrainer(?Trainer $trainer): self
    {
        $this->trainer = $trainer;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * @return Collection|Attack[]
     */
    public function getAttack(): Collection
    {
        return $this->attack;
    }

    public function addAttack(Attack $attack): self
    {
        if (!$this->attack->contains($attack)) {
            $this->attack[] = $attack;
        }

        return $this;
    }

    public function removeAttack(Attack $attack): self
    {
        if ($this->attack->contains($attack)) {
            $this->attack->removeElement($attack);
        }

        return $this;
    }

    /**
     * @return Collection|Attack[]
     */
    public function getAttacks(): Collection
    {
        return $this->attacks;
    }
}
