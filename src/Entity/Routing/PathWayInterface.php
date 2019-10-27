<?php declare(strict_types = 1);

namespace App\Entity\Routing;

use Doctrine\Common\Collections\Collection;

interface PathWayInterface
{
    public function getId(): ?int;

    /**
     * @return Collection|Way[]
     */
    public function getConnectedWays(): Collection;

    public function addConnectedWay(WayInterface $connectedWay): self;

    public function removeConnectedWay(WayInterface $connectedWay): self;
}
