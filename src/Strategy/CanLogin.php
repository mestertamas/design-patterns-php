<?php declare(strict_types=1);

namespace DesignPatterns\Strategy;

class CanLogin implements LoginableInterface
{
    public function login(): string
    {
        return 'Can login!';
    }
}
