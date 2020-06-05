<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class MemberAccount extends Account
{
    private string $memberAccountInfo;

    public function __construct(
        LoginableInterface $loginType,
        CommentableInterface $commentType,
        KickableInterface $kickType,
        string $memberAccountInfo
    ) {
        parent::__construct($loginType, $commentType, $kickType);

        $this->memberAccountInfo = $memberAccountInfo;
    }

    public function getMemberAccountInfo(): string
    {
        return $this->memberAccountInfo;
    }
}
