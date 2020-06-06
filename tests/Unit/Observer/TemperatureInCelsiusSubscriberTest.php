<?php declare(strict_types=1);

namespace Unit\Observer;

use DesignPatterns\Observer\TemperatureChangeEvent;
use DesignPatterns\Observer\TemperatureInCelsiusSubscriber;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \DesignPatterns\Observer\TemperatureInCelsiusSubscriber */
class TemperatureInCelsiusSubscriberTest extends TestCase
{
    private TemperatureInCelsiusSubscriber $sut;

    protected function setUp(): void
    {
        $this->sut = new TemperatureInCelsiusSubscriber();
    }

    /**
     * @covers ::update
     */
    public function testUpdateWillReturnCelsiusText(): void
    {
        $celsiusValue   = 25.0;
        $event          = new TemperatureChangeEvent($celsiusValue);
        $expectedResult = sprintf('%s °C', $celsiusValue);

        $this->assertEquals($this->sut->update($event), $expectedResult);
    }
}
