<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Other\CashMachine;

use DesignPatterns\Src\Other\CashMachine\CashMachine;
use DesignPatterns\Src\Other\CashMachine\Context;
use PHPUnit\Framework\TestCase;

class CashMachineTest extends TestCase
{
    public function test_can_dispense()
    {
        $_REQUEST = [
            'amount' => '2800',
            'algorithm' => 'dynamic'
        ];

        $cashMachine = new CashMachine(new Context());

        $this->assertIsArray($cashMachine->dispense());
    }
}
