<?php

require '../../vendor/autoload.php';

use DesignPatterns\Src\Creational\AbstractFactory\FordFactory;
use DesignPatterns\Src\Creational\AbstractFactory\ToyotaFactory;

$factory = new FordFactory();
$car = $factory->getSedan();
var_dump($car);
var_dump($car->getDescription());

$factory = new ToyotaFactory();
$car = $factory->getCoupe();
var_dump($car);
var_dump($car->getDescription());