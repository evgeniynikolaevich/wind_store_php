<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeneratorRepository")
 */
class Generator
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
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $power;

    /**
     * @ORM\Column(type="integer")
     */
    private $voltage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_generator;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getVoltage(): ?int
    {
        return $this->voltage;
    }

    public function setVoltage(int $voltage): self
    {
        $this->voltage = $voltage;

        return $this;
    }

    public function getTypeGenerator(): ?string
    {
        return $this->type_generator;
    }

    public function setTypeGenerator(string $type_generator): self
    {
        $this->type_generator = $type_generator;

        return $this;
    }
}
