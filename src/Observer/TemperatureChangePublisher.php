<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

use SplObjectStorage;

class TemperatureChangePublisher implements SubjectInterface
{
    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(ObserverInterface $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(ObserverInterface $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify(TemperatureChangeEvent $event): void
    {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $observer)
        {
            $observer->update($event);
        }
    }
}
