<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

class ToyotaSedan implements Sedan
{
    private const DESCRIPTION = 'This car is a Toyota Sedan';

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}