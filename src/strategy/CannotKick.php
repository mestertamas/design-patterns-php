<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class CannotKick implements KickableInterface
{
    public function kick(): string
    {
        return 'Cannot kick anybody!';
    }
}
