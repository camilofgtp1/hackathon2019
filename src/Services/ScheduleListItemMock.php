<?php declare(strict_types = 1);

namespace App\Services;

class ScheduleListItemMock
    implements ScheduleListItemInterface
{
    /**
     * @var string
     */
    private $timeOfArrival;
    /**
     * @var string
     */
    private $vehicleType;
    /**
     * @var string
     */
    private $destination;

    public function __construct()
    {
        $this->timeOfArrival = '';
        $this->vehicleType = '';
        $this->destination = '';
    }

    public function getTimeOfArrival(): string
    {
        return $this->timeOfArrival;
    }

    public function setTimeOfArrival(
        string $timeOfArrival): ScheduleListItemInterface
    {
        $this->timeOfArrival = $timeOfArrival;
        return $this;
    }

    public function getVehicleType(): string
    {
        return $this->vehicleType;
    }

    public function setVehicleType(
        string $vehicleType): ScheduleListItemInterface
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function setDestination(
        string $destination): ScheduleListItemInterface
    {
        $this->destination = $destination;
        return $this;
    }
}
