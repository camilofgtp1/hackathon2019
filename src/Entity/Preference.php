<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreferenceRepository")
 */
class Preference
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $womenOnly;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWomenOnly(): ?bool
    {
        return $this->womenOnly;
    }

    public function setWomenOnly(bool $womenOnly): self
    {
        $this->womenOnly = $womenOnly;

        return $this;
    }
}
