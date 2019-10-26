<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 */
class Vehicle
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
    private $numberOfSeats;

    /**
     * @ORM\Column(type="boolean")
     */
    private $noSmokers;

    /**
     * @ORM\Column(type="boolean")
     */
    private $noPets;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberOfSeats(): ?int
    {
        return $this->numberOfSeats;
    }

    public function setNumberOfSeats(int $numberOfSeats): self
    {
        $this->numberOfSeats = $numberOfSeats;

        return $this;
    }

    public function getNoSmokers(): ?bool
    {
        return $this->noSmokers;
    }

    public function setNoSmokers(bool $noSmokers): self
    {
        $this->noSmokers = $noSmokers;

        return $this;
    }

    public function getNoPets(): ?bool
    {
        return $this->noPets;
    }

    public function setNoPets(bool $noPets): self
    {
        $this->noPets = $noPets;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
