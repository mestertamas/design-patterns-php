<?php declare(strict_types=1);

namespace DesignPatterns\Strategy;

class CanComment implements CommentableInterface
{
    public function comment(): string
    {
        return 'Sure, can add comments!';
    }
}
