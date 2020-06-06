<?php declare(strict_types=1);

namespace DesignPatterns\Observer;

class TemperatureChangeEvent
{
    private float $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
