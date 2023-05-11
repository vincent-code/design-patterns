<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

class ToyotaFactory implements CarFactory
{
    public function getSedan(): Sedan
    {
        return new ToyotaSedan();
    }

    public function getCoupe(): Coupe
    {
        return new ToyotaCoupe();
    }
}