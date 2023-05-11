<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

interface CarFactory
{
    public function getSedan(): Sedan;
    public function getCoupe(): Coupe;
}