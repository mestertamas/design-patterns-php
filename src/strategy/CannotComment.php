<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class CannotComment implements CommentableInterface
{
    public function comment(): string
    {
        return 'Nope, cannot add comments!';
    }
}
