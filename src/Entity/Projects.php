<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\GeneratorRepository;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectsRepository")
 */
class Projects
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
    private $place;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Generator", inversedBy="projects")
     */
    private $generators;

    public function __construct()
    {
        $this->generators = new ArrayCollection();
    }



    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    /**
     * @return Collection|Generator[]
     */
    public function getGenerators(): Collection
    {
        return $this->generators;
    }

    public function addGenerator(Generator $generator, Request $request ,GeneratorRepository $gen_rep):this
      {  if (!$this->generators->contains($generator)){

            $this->generators[] = $generator->getId();
            $generator->setProjects($this);
        }

        return $this;
    }

    public function removeGenerator(Generator $generator)
    {
        if ($this->generators->contains($generator)) {
            $this->generators->removeElement($generator->id);
        }

        return $this;
    }
    public function __toString()
    {
        return strval( $this->getPlace() );
    }


}
