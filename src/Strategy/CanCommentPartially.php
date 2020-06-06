<?php declare(strict_types=1);

namespace DesignPatterns\Strategy;

class CanCommentPartially implements CommentableInterface
{
    public function comment(): string
    {
        return 'Can add comments, but only for public posts!';
    }
}
