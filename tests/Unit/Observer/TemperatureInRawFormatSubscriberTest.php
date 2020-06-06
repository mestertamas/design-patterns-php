<?php declare(strict_types=1);

namespace Unit\Observer;

use DesignPatterns\Observer\TemperatureChangeEvent;
use DesignPatterns\Observer\TemperatureInRawFormatSubscriber;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \DesignPatterns\Observer\TemperatureInRawFormatSubscriber */
class TemperatureInRawFormatSubscriberTest extends TestCase
{
    private TemperatureInRawFormatSubscriber $sut;

    protected function setUp(): void
    {
        $this->sut = new TemperatureInRawFormatSubscriber();
    }

    /**
     * @covers ::update
     */
    public function testUpdateWillReturnCelsiusText(): void
    {
        $celsiusValue   = 25.0;
        $event          = new TemperatureChangeEvent($celsiusValue);

        $this->assertEquals($this->sut->update($event), $celsiusValue);
    }
}
