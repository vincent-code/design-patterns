<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

class FordCoupe implements Coupe
{
    private const DESCRIPTION = 'This car is a Ford Coupe';

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}