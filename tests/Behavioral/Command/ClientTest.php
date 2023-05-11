<?php

declare(strict_types=1);

namespace DesignPatterns\Tests\Behavioral\Command;

use DesignPatterns\Src\Behavioral\Command\Client;
use DesignPatterns\Src\Behavioral\Command\Commands\LoginCommand;
use DesignPatterns\Src\Behavioral\Command\CommandNotFoundException;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private string $filename;

    public function test_client_method_get_command()
    {
        $command = Client::getCommand('login');
        $this->assertInstanceOf(LoginCommand::class, $command);
    }

    public function test_client_error_invalid_sign()
    {
        $this->expectException(\Exception::class);
        Client::getCommand('login 1');
    }

    public function test_client_error_file_not_found()
    {
        $this->expectException(CommandNotFoundException::class);
        Client::getCommand('loginZ');
    }

    public function test_client_error_class_not_found()
    {
        $this->expectException(CommandNotFoundException::class);
        Client::getCommand('test');
    }

    protected function setUp(): void
    {
        if ($this->getName() == 'test_client_error_class_not_found') {
            $this->filename = realpath($_SERVER["DOCUMENT_ROOT"]) . '/src/Behavioral/Command/Commands/TestCommand.php';
            $file = fopen($this->filename, 'w');
            fclose($file);
        }
    }

    protected function tearDown(): void
    {
        if ($this->getName() == 'test_client_error_class_not_found') {
            unlink($this->filename);
        }
    }
}