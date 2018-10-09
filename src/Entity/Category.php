<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vitalOrgan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $relation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVitalOrgan(): ?string
    {
        return $this->vitalOrgan;
    }

    public function setVitalOrgan(string $vitalOrgan): self
    {
        $this->vitalOrgan = $vitalOrgan;

        return $this;
    }

    public function getRelation(): ?string
    {
        return $this->relation;
    }

    public function setRelation(string $relation): self
    {
        $this->relation = $relation;

        return $this;
    }
}
