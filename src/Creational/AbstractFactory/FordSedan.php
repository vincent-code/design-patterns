<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

class FordSedan implements Sedan
{
    private const DESCRIPTION = 'This car is a Ford Sedan';

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}