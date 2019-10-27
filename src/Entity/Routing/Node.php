<?php

namespace App\Entity\Routing;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NodeRepository")
 */
class Node implements NodeInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $displayName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Way", mappedBy="origin")
     */
    private $originForWays;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Way", mappedBy="destination")
     */
    private $destinationForWays;

    public function __construct()
    {
        $this->destinationForWays = new ArrayCollection();
        $this->originForWays = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): NodeInterface
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): NodeInterface
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): NodeInterface
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return Collection|Way[]
     */
    public function getOriginForWays(): Collection
    {
        return $this->originForWays;
    }

    public function addOriginForWay(Way $originForWay): NodeInterface
    {
        if (!$this->originForWays->contains($originForWay)) {
            $this->originForWays[] = $originForWay;
            $originForWay->setDestination($this);
        }

        return $this;
    }

    public function removeOriginForWay(Way $originForWay): NodeInterface
    {
        if ($this->originForWays->contains($originForWay)) {
            $this->originForWays->removeElement($originForWay);
            // set the owning side to null (unless already changed)
            if ($originForWay->getDestination() === $this) {
                $originForWay->setDestination(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Way[]
     */
    public function getDestinationForWays(): Collection
    {
        return $this->destinationForWays;
    }

    public function addDestinationForWay(Way $destinationForWay): NodeInterface
    {
        if (!$this->destinationForWays->contains($destinationForWay)) {
            $this->destinationForWays[] = $destinationForWay;
            $destinationForWay->setDestination($this);
        }

        return $this;
    }

    public function removeDestinationForWay(Way $destinationForWay): NodeInterface
    {
        if ($this->destinationForWays->contains($destinationForWay)) {
            $this->destinationForWays->removeElement($destinationForWay);
            // set the owning side to null (unless already changed)
            if ($destinationForWay->getDestination() === $this) {
                $destinationForWay->setDestination(null);
            }
        }

        return $this;
    }
}
