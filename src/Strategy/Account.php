<?php declare(strict_types=1);

namespace DesignPatterns\Strategy;

class Account
{
    private LoginableInterface   $loginType;
    private CommentableInterface $commentType;
    private KickableInterface    $kickType;

    public function __construct(
        LoginableInterface $loginType,
        CommentableInterface $commentType,
        KickableInterface $kickType
    ) {
        $this->loginType   = $loginType;
        $this->commentType = $commentType;
        $this->kickType    = $kickType;
    }

    public function login(): string
    {
        return $this->loginType->login();
    }

    public function comment(): string
    {
        return $this->commentType->comment();
    }

    public function kick(): string
    {
        return $this->kickType->kick();
    }

    public function greet(): string
    {
        return 'Hey, I am an Account!';
    }
}
