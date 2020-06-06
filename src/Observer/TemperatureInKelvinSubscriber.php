<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

class TemperatureInKelvinSubscriber implements ObserverInterface
{
    private const CELSIUS_TO_KELVIN_DIFF = 274.15;

    /**
     * @inheritDoc
     */
    public function update(TemperatureChangeEvent $event): string
    {
        return sprintf('%s K', $event->getValue() + self::CELSIUS_TO_KELVIN_DIFF);
    }
}
