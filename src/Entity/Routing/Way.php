<?php

namespace App\Entity\Routing;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WayRepository")
 */
class Way implements WayInterface
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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return NodeInterface|null
     */
    public function getOrigin(): ?NodeInterface
    {
        return $this->origin;
    }

    /**
     * @param NodeInterface $origin
     * @return $this
     */
    public function setOrigin(NodeInterface $origin): WayInterface
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return NodeInterface|null
     */
    public function getDestination(): ?NodeInterface
    {
        return $this->destination;
    }

    /**
     * @param NodeInterface|null $destination
     * @return $this
     */
    public function setDestination(?NodeInterface $destination): WayInterface
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return PathWay|null
     */
    public function getConnectedPathWay(): ?PathWay
    {
        return $this->connectedPathWay;
    }

    /**
     * @param PathWay|null $connectedPathWay
     * @return $this
     */
    public function setConnectedPathWay(?PathWay $connectedPathWay): WayInterface
    {
        $this->connectedPathWay = $connectedPathWay;

        return $this;
    }
}
