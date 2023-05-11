<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

class FordFactory implements CarFactory
{
    public function getSedan(): Sedan
    {
        return new FordSedan();
    }

    public function getCoupe(): Coupe
    {
        return new FordCoupe();
    }
}