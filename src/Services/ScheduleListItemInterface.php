<?php declare(strict_types = 1);

namespace App\Services;

interface ScheduleListItemInterface
{
    public function getTimeOfArrival(): string;

    public function getVehicleType(): string;

    public function getDestination(): string;

    public function setTimeOfArrival(
        string $timeOfArrival): ScheduleListItemInterface;

    public function setVehicleType(
        string $vehicleType): ScheduleListItemInterface;

    public function setDestination(
        string $destination): ScheduleListItemInterface;
}
