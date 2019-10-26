<?php declare(strict_types = 1);

namespace App\Controller;

use App\Services\requestingPassengerDTOInterface;

interface RequestingPassengerControllerInterface
{
    public function index(requestingPassengerDTOInterface $dto);
}
