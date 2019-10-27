<?php declare(strict_types = 1);

namespace App\Entity\Routing;

interface WayInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return NodeInterface|null
     */
    public function getOrigin(): ?NodeInterface;

    /**
     * @param NodeInterface $origin
     * @return $this
     */
    public function setOrigin(NodeInterface $origin): WayInterface;

    /**
     * @return NodeInterface|null
     */
    public function getDestination(): ?NodeInterface;

    /**
     * @param NodeInterface|null $destination
     * @return $this
     */
    public function setDestination(?NodeInterface $destination): WayInterface;

    /**
     * @return PathWay|null
     */
    public function getConnectedPathWay(): ?PathWay;

    /**
     * @param PathWay|null $connectedPathWay
     * @return $this
     */
    public function setConnectedPathWay(?PathWay $connectedPathWay): WayInterface;
}
