<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

class TemperatureInCelsiusSubscriber implements ObserverInterface
{
    /**
     * @inheritDoc
     */
    public function update(TemperatureChangeEvent $event): string
    {
        return sprintf('%s °C', $event->getValue());
    }
}
