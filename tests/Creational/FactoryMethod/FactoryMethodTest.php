<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Creational\FactoryMethod;

use DesignPatterns\Src\Creational\FactoryMethod\EmailNoticeFactory;
use DesignPatterns\Src\Creational\FactoryMethod\PushNoticeFactory;
use DesignPatterns\Src\Creational\FactoryMethod\EmailNotice;
use DesignPatterns\Src\Creational\FactoryMethod\PushNotice;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function test_can_create_email_notice()
    {
        $noticeFactory = new EmailNoticeFactory();
        $notice = $noticeFactory->createNotice();

        $this->assertInstanceOf(EmailNotice::class, $notice, 'Error assert instance of EmailNotice');
    }


    public function test_can_create_push_notice()
    {
        $noticeFactory = new PushNoticeFactory();
        $notice = $noticeFactory->createNotice();

        $this->assertInstanceOf(PushNotice::class, $notice, 'Error assert instance of PushNotice');
    }
}
