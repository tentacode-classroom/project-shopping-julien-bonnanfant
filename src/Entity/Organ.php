<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrganRepository")
 */
class Organ
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="text")
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Provenance;

    /**
     * @ORM\Column(type="integer")
     */
    private $ViewController;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $viewCounter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getProvenance(): ?string
    {
        return $this->Provenance;
    }

    public function setProvenance(string $Provenance): self
    {
        $this->Provenance = $Provenance;

        return $this;
    }

    public function getViewCounter(): ?int
    {
        return $this->viewCounter;
    }

    public function setViewCounter(?int $viewCounter): self
    {
        $this->viewCounter = $viewCounter;

        return $this;
    }

}
