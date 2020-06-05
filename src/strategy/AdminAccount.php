<?php declare(strict_types=1);

namespace DesignPatterns\strategy;

class AdminAccount extends Account
{
    private string $adminAccountInfo;

    public function __construct(
        LoginableInterface $loginType,
        CommentableInterface $commentType,
        KickableInterface $kickType,
        string $adminAccountInfo
    ) {
        parent::__construct($loginType, $commentType, $kickType);

        $this->adminAccountInfo = $adminAccountInfo;
    }

    public function getAdminAccountInfo(): string
    {
        return $this->adminAccountInfo;
    }
}
