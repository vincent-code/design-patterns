<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\FactoryMethod;

class PushNotice implements Notice
{
    public function notify(): string
    {
        return 'Sending a push notice';
    }
}