<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WayRepository")
 */
class Way
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Node", inversedBy="originForWays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $origin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Node", inversedBy="destinationForWays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $destination;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PathWay", inversedBy="connectedWays")
     */
    private $connectedPathWay;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrigin(): ?NodeInterface
    {
        return $this->origin;
    }

    public function setOrigin(
        NodeInterface $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getDestination(): ?NodeInterface
    {
        return $this->destination;
    }

    public function setDestination(?NodeInterface $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getConnectedPathWay(): ?PathWay
    {
        return $this->connectedPathWay;
    }

    public function setConnectedPathWay(?PathWay $connectedPathWay): self
    {
        $this->connectedPathWay = $connectedPathWay;

        return $this;
    }
}
