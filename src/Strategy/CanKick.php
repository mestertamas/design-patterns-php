<?php declare(strict_types=1);

namespace DesignPatterns\Strategy;

class CanKick implements KickableInterface
{
    public function kick(): string
    {
        return 'Can kick you out!';
    }
}
