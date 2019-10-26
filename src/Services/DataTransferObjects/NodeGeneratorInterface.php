<?php declare(strict_types = 1);

namespace App\Services\DataTransferObjects;

use App\Entity\NodeInterface;

interface NodeGeneratorInterface
{
    public function getNodeOfOrigin(): NodeInterface;
    public function getNodeOfDestination(): NodeInterface;
}
