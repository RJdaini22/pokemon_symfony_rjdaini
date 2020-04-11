<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PotionRepository")
 */
class Potion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $power;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $potion_created_at;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $potion_updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPotionCreatedAt(): ?\DateTimeInterface
    {
        return $this->potion_created_at;
    }

    public function setPotionCreatedAt(\DateTimeInterface $potion_created_at): self
    {
        $this->potion_created_at = $potion_created_at;

        return $this;
    }

    public function getPotionUpdatedAt(): ?\DateTimeInterface
    {
        return $this->potion_updated_at;
    }

    public function setPotionUpdatedAt(\DateTimeInterface $potion_updated_at): self
    {
        $this->potion_updated_at = $potion_updated_at;

        return $this;
    }

}
