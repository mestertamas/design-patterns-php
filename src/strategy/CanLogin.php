<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class CanLogin implements LoginableInterface
{
    public function login(): string
    {
        return 'Can login!';
    }
}
