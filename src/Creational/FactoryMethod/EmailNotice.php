<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\FactoryMethod;

class EmailNotice implements Notice
{
    public function notify(): string
    {
        return 'Sending an email notice';
    }
}