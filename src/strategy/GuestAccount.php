<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class GuestAccount extends Account
{
    private string $guestAccountInfo;

    public function __construct(
        LoginableInterface $loginType,
        CommentableInterface $commentType,
        KickableInterface $kickType,
        string $guestAccountInfo
    ) {
        parent::__construct($loginType, $commentType, $kickType);

        $this->guestAccountInfo = $guestAccountInfo;
    }

    public function getGuestAccountInfo(): string
    {
        return $this->guestAccountInfo;
    }
}
