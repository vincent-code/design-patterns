<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Structural\Facade;

class MySQLReport
{
    public function make()
    {
        return 'MySQL_Report';
    }
}