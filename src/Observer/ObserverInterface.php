<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

interface ObserverInterface
{
    public function update(TemperatureChangeEvent $event): string;
}
