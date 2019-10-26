<?php declare(strict_types = 1);

namespace App\Services;

interface requestingPassengerDTOInterface
{
    public function getTitle(): string;
    public function getPlannedSchedule(): ScheduleListInterface;
}
