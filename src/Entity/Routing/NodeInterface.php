<?php declare(strict_types = 1);

namespace App\Entity\Routing;

use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NodeRepository")
 */
interface NodeInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return float|null
     */
    public function getLatitude(): ?float;

    /**
     * @param float $latitude
     * @return NodeInterface
     */
    public function setLatitude(
        float $latitude): NodeInterface;

    /**
     * @return float|null
     */
    public function getLongitude(): ?float;

    /**
     * @param float $longitude
     * @return NodeInterface
     */
    public function setLongitude(
        float $longitude): NodeInterface;

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string;

    /**
     * @param string|null $displayName
     * @return NodeInterface
     */
    public function setDisplayName(
        ?string $displayName): NodeInterface;

    /**
     * @return Collection|Way[]
     */
    public function getOriginForWays(): Collection;

    /**
     * @param WayInterface $originForWay
     * @return NodeInterface
     */
    public function addOriginForWay(
        WayInterface $originForWay): NodeInterface;

    /**
     * @param WayInterface $originForWay
     * @return NodeInterface
     */
    public function removeOriginForWay(
        WayInterface $originForWay): NodeInterface;

    /**
     * @return Collection|Way[]
     */
    public function getDestinationForWays(): Collection;

    /**
     * @param WayInterface $destinationForWay
     * @return NodeInterface
     */
    public function addDestinationForWay(
        WayInterface $destinationForWay): NodeInterface;

    /**
     * @param WayInterface $destinationForWay
     * @return NodeInterface
     */
    public function removeDestinationForWay(
        WayInterface $destinationForWay): NodeInterface;
}
