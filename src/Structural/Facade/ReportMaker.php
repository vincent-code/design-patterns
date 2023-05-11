<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Structural\Facade;

interface ReportMaker
{
    public function oracle();
    public function mysql();
}