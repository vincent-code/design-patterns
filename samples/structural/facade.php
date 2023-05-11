<?php

require '../../vendor/autoload.php';

use DesignPatterns\Src\Structural\Facade\Report;

$report = new Report();
var_dump($report->oracle());
var_dump($report->mysql());