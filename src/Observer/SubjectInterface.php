<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

interface SubjectInterface
{
    public function attach(ObserverInterface $observer): void;
    public function detach(ObserverInterface $observer): void;
    public function notify(TemperatureChangeEvent $event): void;
}
