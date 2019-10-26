<?php declare(strict_types = 1);

namespace App\Services\DataTransferObjects;

use App\Entity\Node;
use App\Entity\NodeInterface;

class NodeGeneratorMock
    implements NodeGeneratorInterface
{

    public function getNodeOfOrigin(): NodeInterface
    {
        return (new Node())
            ->setDisplayName('Hersfeld')
            ->setLatitude(50.0043)
            ->setLongitude(9.0002);
    }

    public function getNodeOfDestination(): NodeInterface
    {
        return (new Node())
            ->setDisplayName('Motten')
            ->setLatitude(50.0040)
            ->setLongitude(9.020);
    }
}
