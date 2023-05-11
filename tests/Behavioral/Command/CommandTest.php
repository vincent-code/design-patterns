<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Behavioral\Command;

use DesignPatterns\Src\Behavioral\Command\Invoker;
use DesignPatterns\Src\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    private Invoker $invoker;
    private Receiver $receiver;

    public function test_invocation()
    {
        $this->invoker->run();

        $this->assertSame('Success', $this->receiver->getOutput()['LoginCommand']);
        $this->assertSame('Success', $this->receiver->getOutput()['Invoker']);
    }

    public function test_wrong_pass()
    {
        $this->receiver->setParam('pass', '123');

        $this->invoker->run();

        $this->assertSame('Fail', $this->receiver->getOutput()['LoginCommand']);
        $this->assertSame('Fail', $this->receiver->getOutput()['Invoker']);
    }

    protected function setUp(): void
    {
        $this->invoker = new Invoker();
        $this->receiver = $this->invoker->getReceiver();

        $this->receiver->setParam('action', 'login');
        $this->receiver->setParam('user', 'Amos Burton');
        $this->receiver->setParam('pass', '1234');
    }

    protected function tearDown(): void
    {
        unset($this->invoker);
        unset($this->receiver);
        //$client = $this->getMockBuilder('Client')->getMock();
        //$this->assertInstanceOf('Client', $client);
    }
}