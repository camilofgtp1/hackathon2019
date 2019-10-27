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
     * @param Way $originForWay
     * @return NodeInterface
     */
    public function addOriginForWay(
        Way $originForWay): NodeInterface;

    /**
     * @param Way $originForWay
     * @return NodeInterface
     */
    public function removeOriginForWay(
        Way $originForWay): NodeInterface;

    /**
     * @return Collection|Way[]
     */
    public function getDestinationForWays(): Collection;

    /**
     * @param Way $destinationForWay
     * @return NodeInterface
     */
    public function addDestinationForWay(
        Way $destinationForWay): NodeInterface;

    /**
     * @param Way $destinationForWay
     * @return NodeInterface
     */
    public function removeDestinationForWay(
        Way $destinationForWay): NodeInterface;
}
