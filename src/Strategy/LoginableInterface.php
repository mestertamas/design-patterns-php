<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

interface LoginableInterface
{
    public function login(): string;
}
