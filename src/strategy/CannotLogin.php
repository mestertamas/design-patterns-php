<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class CannotLogin implements LoginableInterface
{
    public function login(): string
    {
        return 'Cannot login!';
    }
}
