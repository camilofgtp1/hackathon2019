<?php declare(strict_types = 1);

namespace App\Controller\Planning;

use App\Services\requestingPassengerDTOInterface;

interface ScheduleControllerInterface
{
    public function index(requestingPassengerDTOInterface $dto);
}
