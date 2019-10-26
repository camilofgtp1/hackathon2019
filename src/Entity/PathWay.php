<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PathWayRepository")
 */
class PathWay
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Way", mappedBy="connectedPathWay")
     */
    private $connectedWays;

    public function __construct()
    {
        $this->connectedWays = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Way[]
     */
    public function getConnectedWays(): Collection
    {
        return $this->connectedWays;
    }

    public function addConnectedWay(Way $connectedWay): self
    {
        if (!$this->connectedWays->contains($connectedWay)) {
            $this->connectedWays[] = $connectedWay;
            $connectedWay->setConnectedPathWay($this);
        }

        return $this;
    }

    public function removeConnectedWay(Way $connectedWay): self
    {
        if ($this->connectedWays->contains($connectedWay)) {
            $this->connectedWays->removeElement($connectedWay);
            // set the owning side to null (unless already changed)
            if ($connectedWay->getConnectedPathWay() === $this) {
                $connectedWay->setConnectedPathWay(null);
            }
        }

        return $this;
    }
}
