<?php

require '../../vendor/autoload.php';

use DesignPatterns\Src\Creational\FactoryMethod\PushNoticeFactory;
use DesignPatterns\Src\Creational\FactoryMethod\EmailNoticeFactory;

$factory = new PushNoticeFactory();
$notice = $factory->createNotice();
var_dump($notice);
var_dump($notice->notify());


$factory = new EmailNoticeFactory();
$notice = $factory->createNotice();
var_dump($notice);
var_dump($notice->notify());