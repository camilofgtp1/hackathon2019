<?php declare(strict_types = 1);

namespace App\Services;

class ScheduleListMock implements ScheduleListInterface
{

    /**
     * @var ScheduleListItemInterface[]|array
     */
    private $schedule;

    public function __construct()
    {
        $this->schedule = [new ScheduleListItemMock()];
    }

    /**
     * @return ScheduleListItemInterface[]
     */
    public function getList(): array
    {
        return $this->schedule;
    }

    public function addToList(ScheduleListItemInterface $scheduleListItem):ScheduleListInterface
    {
        $this->schedule[] = $scheduleListItem;

        return $this;
    }
}
