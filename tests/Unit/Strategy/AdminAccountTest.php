<?php declare(strict_types=1);

namespace Unit\Strategy;

use DesignPatterns\strategy\AdminAccount;
use DesignPatterns\strategy\CanKick;
use DesignPatterns\strategy\CanLogin;
use DesignPatterns\strategy\CannotComment;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \DesignPatterns\Strategy\AdminAccount */
class AdminAccountTest extends TestCase
{
    private const ADMIN_INFO_TEXT = 'This is the admin info!';

    private AdminAccount $sut;

    protected function setUp(): void
    {
        $this->sut = new AdminAccount(
            new CanLogin(),
            new CannotComment(),
            new CanKick(),
            self::ADMIN_INFO_TEXT
        );
    }

    public function testGreetWillReturnGuestInfoText(): void
    {
        $this->assertEquals($this->sut->getAdminAccountInfo(), self::ADMIN_INFO_TEXT);
    }

    /**
     * @covers ::login
     */
    public function testLoginWillReturnCanLoginText(): void
    {
        $this->assertEquals($this->sut->login(), 'Can login!');
    }

    /**
     * @covers ::comment
     */
    public function testCommentWillReturnCannotCommentText(): void
    {
        $this->assertEquals($this->sut->comment(), 'Nope, cannot add comments!');
    }

    /**
     * @covers ::kick
     */
    public function testKickWillReturnCannotKickText(): void
    {
        $this->assertEquals($this->sut->kick(), 'Can kick you out!');
    }

    /**
     * @covers ::greet
     */
    public function testGreetWillAccountText(): void
    {
        $this->assertEquals($this->sut->greet(), 'Hey, I am an Account!');
    }
}
