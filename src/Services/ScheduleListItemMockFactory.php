<?php declare(strict_types = 1);

namespace App\Services;

class ScheduleListItemMockFactory
    implements ScheduleListItemFactoryInterface
{

    public function __construct()
    {
        $this->createMock();
    }

    /**
     * @return ScheduleListItemInterface
     */
    private function createMock(): ScheduleListItemInterface
    {
        return new ScheduleListItemMock();
    }

    /**
     * @return ScheduleListInterface
     */
    public function getScheduleForCurrentNode(): ScheduleListInterface
    {
        return $this->getMockSchedule(10);
    }

    /**
     * @param int $numberOfEntries
     * @return ScheduleListInterface
     */
    public function getMockSchedule(
        int $numberOfEntries): ScheduleListInterface
    {
        $schedule = new ScheduleListMock();

        for ($i = 0; $i < $numberOfEntries; $i++) {
            $item = $this->createMockScheduleListItem($i);
            $schedule->addToList($item);
        }

        return $schedule;
    }

    /**
     * @param int $i
     * @return ScheduleListItemInterface
     */
    private function createMockScheduleListItem(
        int $i): ScheduleListItemInterface
    {
        return ($this->createMock())
            ->setTimeOfArrival($this->mockInterval($i))
            ->setDestination($this->mockDestination())
            ->setVehicleType($this->mockVehicleType());
    }

    /**
     * @param int $i
     * @return string
     */
    private function mockInterval(int $i): string
    {
        $variation = rand(00,32);
        $variation = $this->correctSingleDigitVariation($variation);

        $formattedVariation = $this->formatMockTime($i, $variation);

        return $formattedVariation;
    }

    /**
     * @return string
     */
    private function mockDestination(): string
    {
        $mockedDestinationList = [
            'Hersfeld',
            'Rotenburg',
            'Großenbach'
        ];

        return $mockedDestinationList[$this->randomizedIndexSelection($mockedDestinationList)];
    }

    /**
     * @param array $mockedList
     * @return int
     */
    private function randomizedIndexSelection(
        array $mockedList): int
    {
        return rand(0, sizeof($mockedList) - 1);
    }

    /**
     * @return string
     */
    private function mockVehicleType(): string
    {
        $mockedVehicleType = [
            'vehicle.type.bus',
            'vehicle.type.requestedBus',
            'vehicle.type.communityBus',
        ];

        return $mockedVehicleType[$this->randomizedIndexSelection($mockedVehicleType)];
    }

    /**
     * @param int $variation
     * @return int|string
     */
    private function correctSingleDigitVariation(
        int $variation)
    {
        return ($variation < 10)
            ? '0' . $variation
            : $variation;
    }

    /**
     * @param int $i
     * @param $variation
     * @return string
     */
    private function formatMockTime(
        int $i,
        $variation): string
    {
        return '1' . $i . ':' . $variation . ' Uhr';
    }

}
