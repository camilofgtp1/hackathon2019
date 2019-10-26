<?php declare(strict_types = 1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NodeRepository")
 */
interface NodeInterface
{
    public function getId(): ?int;

    public function getLatitude(): ?float;

    public function setLatitude(
        float $latitude): NodeInterface;

    public function getLongitude(): ?float;

    public function setLongitude(
        float $longitude): NodeInterface;

    public function getDisplayName(): ?string;

    public function setDisplayName(
        ?string $displayName): NodeInterface;

    /**
     * @return Collection|Way[]
     */
    public function getOriginForWays(): Collection;

    public function addOriginForWay(
        Way $originForWay): NodeInterface;

    public function removeOriginForWay(
        Way $originForWay): NodeInterface;

    /**
     * @return Collection|Way[]
     */
    public function getDestinationForWays(): Collection;

    public function addDestinationForWay(
        Way $destinationForWay): NodeInterface;

    public function removeDestinationForWay(
        Way $destinationForWay): NodeInterface;
}
