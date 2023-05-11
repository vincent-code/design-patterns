<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Structural\Facade;

use DesignPatterns\Src\Structural\Facade\Report;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function test_can_create_reports()
    {
        $report = new Report();

        $this->assertSame('MySQL_Report', $report->mysql());
        $this->assertSame('Oracle_Report', $report->oracle());
    }
}
