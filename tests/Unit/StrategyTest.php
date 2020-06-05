<?php declare(strict_types=1);

namespace Unit;

use DesignPatterns\strategy\AdminAccount;
use DesignPatterns\strategy\CanComment;
use DesignPatterns\strategy\CanCommentPartially;
use DesignPatterns\strategy\CanKick;
use DesignPatterns\strategy\CanLogin;
use DesignPatterns\strategy\CannotComment;
use DesignPatterns\strategy\CannotKick;
use DesignPatterns\strategy\CannotLogin;
use DesignPatterns\strategy\GuestAccount;
use DesignPatterns\strategy\MemberAccount;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private const GUEST_INFO_TEXT  = 'This is the guest info!';
    private const MEMBER_INFO_TEXT = 'This is the member info!';
    private const ADMIN_INFO_TEXT  = 'This is the admin info!';

    private GuestAccount  $guestAccount;
    private MemberAccount $memberAccount;
    private AdminAccount  $adminAccount;

    protected function setUp(): void
    {
        $this->guestAccount  = $this->createGuestAccount();
        $this->memberAccount = $this->createMemberAccount();
        $this->adminAccount  = $this->createAdminAccount();
    }

    public function testGreetWillReturnGuestInfoText(): void
    {
        $this->assertEquals($this->guestAccount->getGuestAccountInfo(), self::GUEST_INFO_TEXT);
    }

    private function createGuestAccount(): GuestAccount
    {
        return new GuestAccount(
            new CannotLogin(),
            new CanCommentPartially(),
            new CannotKick(),
            self::GUEST_INFO_TEXT
        );
    }

    private function createMemberAccount(): MemberAccount
    {
        return new MemberAccount(
            new CanLogin(),
            new CanComment(),
            new CannotKick(),
            self::MEMBER_INFO_TEXT
        );
    }

    private function createAdminAccount(): AdminAccount
    {
        return new AdminAccount(
            new CanLogin(),
            new CannotComment(),
            new CanKick(),
            self::ADMIN_INFO_TEXT
        );
    }
}
