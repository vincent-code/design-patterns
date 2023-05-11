<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Structural\Facade;

class Report implements ReportMaker
{
    public function oracle()
    {
        return (new OracleReport())->make();
    }

    public function mysql()
    {
        return (new MySQLReport())->make();
    }
}