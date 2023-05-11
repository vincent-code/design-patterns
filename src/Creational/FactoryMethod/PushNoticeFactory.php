<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Creational\FactoryMethod;

class PushNoticeFactory implements NoticeFactory
{
    public function createNotice(): Notice
    {
        return new PushNotice();
    }
}