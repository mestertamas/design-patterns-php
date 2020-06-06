<?php declare(strict_types=1);

namespace Unit\Strategy;

use DesignPatterns\strategy\CanComment;
use DesignPatterns\strategy\CanLogin;
use DesignPatterns\strategy\CannotKick;
use DesignPatterns\strategy\MemberAccount;
use PHPUnit\Framework\TestCase;

/** @coversDefaultClass \DesignPatterns\Strategy\GuestAccount */
class MemberAccountTest extends TestCase
{
    private const MEMBER_INFO_TEXT = 'This is the member info!';

    private MemberAccount $sut;

    protected function setUp(): void
    {
        $this->sut = new MemberAccount(
            new CanLogin(),
            new CanComment(),
            new CannotKick(),
            self::MEMBER_INFO_TEXT
        );
    }

    public function testGreetWillReturnMemberInfoText(): void
    {
        $this->assertEquals($this->sut->getMemberAccountInfo(), self::MEMBER_INFO_TEXT);
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
    public function testCommentWillReturnCanCommentText(): void
    {
        $this->assertEquals($this->sut->comment(), 'Sure, can add comments!');
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
