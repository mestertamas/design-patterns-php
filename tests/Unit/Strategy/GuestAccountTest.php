<?php declare(strict_types=1);

namespace Unit\Strategy;

use DesignPatterns\strategy\CanCommentPartially;
use DesignPatterns\strategy\CannotKick;
use DesignPatterns\strategy\CannotLogin;
use DesignPatterns\strategy\GuestAccount;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \DesignPatterns\Strategy\GuestAccount */
class GuestAccountTest extends TestCase
{
    private const GUEST_INFO_TEXT = 'This is the guest info!';

    private GuestAccount $sut;

    protected function setUp(): void
    {
        $this->sut = new GuestAccount(
            new CannotLogin(),
            new CanCommentPartially(),
            new CannotKick(),
            self::GUEST_INFO_TEXT
        );
    }

    /**
     * @covers ::getGuestAccountInfo
     */
    public function testGreetWillReturnGuestInfoText(): void
    {
        $this->assertEquals($this->sut->getGuestAccountInfo(), self::GUEST_INFO_TEXT);
    }

    /**
     * @covers ::login
     */
    public function testLoginWillReturnCannotLoginText(): void
    {
        $this->assertEquals($this->sut->login(), 'Cannot login!');
    }

    /**
     * @covers ::comment
     */
    public function testCommentWillReturnCanCommentPartiallyText(): void
    {
        $this->assertEquals($this->sut->comment(), 'Can add comments, but only for public posts!');
    }

    /**
     * @covers ::kick
     */
    public function testKickWillReturnCannotKickText(): void
    {
        $this->assertEquals($this->sut->kick(), 'Cannot kick anybody!');
    }

    /**
     * @covers ::greet
     */
    public function testGreetWillAccountText(): void
    {
        $this->assertEquals($this->sut->greet(), 'Hey, I am an Account!');
    }
}
