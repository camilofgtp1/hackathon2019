<?php declare(strict_types = 1);

namespace App\Services;

class ScheduleListItemMockFactory implements ScheduleListItemFactoryInterface
{

    /**
     * @var ScheduleListItemInterface
     */
    private $scheduleListItem;

    public function __construct(
        ScheduleListItemInterface $scheduleListItem
        )
    {
        $this->scheduleListItem = $scheduleListItem;
    }

    public function getScheduleForCurrentNode(): ScheduleListInterface
    {
        return $this->getMockSchedule(20);
    }

    /**
     * @param int $numberOfEntries
     * @return ScheduleListInterface
     */
    public function getMockSchedule(int $numberOfEntries): ScheduleListInterface
    {
        $schedule = new ScheduleListMock();

        for ($i = 0; $i < $numberOfEntries; $i++)
        {
            $schedule->addToList($this->createMockScheduleListItem());
        }

        return $schedule;
    }

    private function createMockScheduleListItem(): ScheduleListItemInterface
    {
        return $this->scheduleListItem;
    }
}
