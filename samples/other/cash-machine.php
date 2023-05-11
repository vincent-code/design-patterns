<?php

require '../../vendor/autoload.php';

use DesignPatterns\Src\Other\CashMachine\CashMachine;
use DesignPatterns\Src\Other\CashMachine\Context;

var_dump($_REQUEST); // ?amount=22822&algorithm=dynamic

try {
    $cashMachine = new CashMachine(new Context());
    var_dump($cashMachine);
    var_dump($cashMachine->dispense());
} catch (\Exception $e) {
    echo $e->getMessage();
}
