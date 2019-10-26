<?php declare(strict_types = 1);

namespace App\Services;

class requestingPassengerDTO
    implements requestingPassengerDTOInterface
{

    /**
     * @var ScheduleListItemFactoryInterface
     */
    private $scheduleListItemFactory;

    public function __construct(ScheduleListItemFactoryInterface $scheduleListItemFactory)
    {
        $this->scheduleListItemFactory = $scheduleListItemFactory;
    }

    public function getTitle(): string
    {
        return 'Mobilitätsangebote zu deinem Standort';
    }

    public function getPlannedSchedule(): ScheduleListInterface
    {
        /**
         * @var ScheduleListInterface $schedule
         */
        $schedule = $this->scheduleListItemFactory->getScheduleForCurrentNode();

        return $schedule;
    }
}
