<?php declare(strict_types=1);

namespace Unit\Observer;

use DesignPatterns\Observer\TemperatureChangeEvent;
use DesignPatterns\Observer\TemperatureInKelvinSubscriber;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \DesignPatterns\Observer\TemperatureInKelvinSubscriber */
class TemperatureInKelvinSubscriberTest extends TestCase
{
    private TemperatureInKelvinSubscriber $sut;

    protected function setUp(): void
    {
        $this->sut = new TemperatureInKelvinSubscriber();
    }

    /**
     * @covers ::update
     */
    public function testUpdateWillReturnCelsiusText(): void
    {
        $celsiusValue   = 25.0;
        $event          = new TemperatureChangeEvent($celsiusValue);
        $kelvinValue    = 25.0 + 274.15;
        $expectedResult = sprintf('%s K', $kelvinValue);

        $this->assertEquals($this->sut->update($event), $expectedResult);
    }
}
