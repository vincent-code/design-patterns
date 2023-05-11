<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Behavioral\Command;

class Invoker
{
    private Receiver $receiver;

    public function __construct()
    {
        $this->receiver = new Receiver();
    }

    public function getReceiver(): Receiver
    {
        return $this->receiver;
    }

    public function getCommand(): Command
    {
        $action = $this->receiver->getParam('action') ?? 'default';
        return Client::getCommand($action);
    }

    public function run()
    {
        if ($this->getCommand()->execute($this->receiver)) {
            $this->receiver->write('Invoker', 'Success');
        } else {
            $this->receiver->write('Invoker', 'Fail');
        }
    }
}