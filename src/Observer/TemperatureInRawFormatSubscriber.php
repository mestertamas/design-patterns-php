<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

class TemperatureInRawFormatSubscriber implements ObserverInterface
{
    /**
     * @inheritDoc
     */
    public function update(TemperatureChangeEvent $event): string
    {
        return (string)$event->getValue();
    }
}
