<?php declare(strict_types = 1);

namespace App\Controller;

use App\Services\requestingPassengerDTOInterface;

interface RequestingPassengerFindControllerInterface
{
    public function index(requestingPassengerDTOInterface $dto);
}
