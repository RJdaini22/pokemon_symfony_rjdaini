<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BallRepository")
 */
class Ball
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $ball_created_at;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $ball_updated_at;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBallCreatedAt(): ?\DateTimeInterface
    {
        return $this->ball_created_at;
    }

    public function setBallCreatedAt(\DateTimeInterface $ball_created_at): self
    {
        $this->ball_created_at = $ball_created_at;

        return $this;
    }

    public function getBallUpdatedAt(): ?\DateTimeInterface
    {
        return $this->ball_updated_at;
    }

    public function setBallUpdatedAt(\DateTimeInterface $ball_updated_at): self
    {
        $this->ball_updated_at = $ball_updated_at;

        return $this;
    }

}
