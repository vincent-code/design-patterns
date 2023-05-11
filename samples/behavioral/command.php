<?php

require '../../vendor/autoload.php';

use DesignPatterns\Src\Behavioral\Command\Invoker;

$invoker = new Invoker();

$receiver = $invoker->getReceiver();

$receiver->setParam('action', 'login'); // login feedback
$receiver->setParam('user', 'Amos Burton');
$receiver->setParam('pass', '1234');

try {
    $invoker->run();
} catch (Exception $e) {
    echo $e;
}

var_dump($receiver->getOutput());