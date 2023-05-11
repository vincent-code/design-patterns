<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\AbstractFactory;

class ToyotaCoupe implements Coupe
{
    private const DESCRIPTION = 'This car is a Toyota Coupe';

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}