<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Behavioral\Command\Commands;

use DesignPatterns\Src\Behavioral\Command\Command;
use DesignPatterns\Src\Behavioral\Command\Receiver;

class FeedbackCommand implements Command
{
    public function execute(Receiver $receiver): bool
    {
        $receiver->write('FeedbackCommand', 'Fail');
        return false;
    }
}