<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\FactoryMethod;

interface NoticeFactory
{
    public function createNotice(): Notice;
}