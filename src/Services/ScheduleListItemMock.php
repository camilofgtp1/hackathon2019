<?php declare(strict_types = 1);

namespace App\Services;

class ScheduleListItemMock
    implements ScheduleListItemInterface
{
    public function getTimeOfArrival(): string
    {
        return '13:44';
    }

    public function getVehicleType(): string
    {
        return 'vehicle.type.public.bus';
    }

    public function getDestination(): string
    {
        return 'Fulda (HBF)';
    }
}
