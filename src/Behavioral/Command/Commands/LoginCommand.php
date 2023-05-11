<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Behavioral\Command\Commands;

use DesignPatterns\Src\Behavioral\Command\Command;
use DesignPatterns\Src\Behavioral\Command\Receiver;

class LoginCommand implements Command
{
    public function execute(Receiver $receiver): bool
    {
        if (
            $receiver->getParam('user') == 'Amos Burton' &&
            $receiver->getParam('pass') == '1234'
        ) {
            $receiver->write('LoginCommand', 'Success');
            return true;
        } else {
            $receiver->write('LoginCommand', 'Fail');
            return false;
        }
    }
}