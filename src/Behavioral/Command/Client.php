<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Behavioral\Command;

class Client
{
    private static string $dir = '/Commands';
    private static string $commandNamespace = 'DesignPatterns\Src\Behavioral\Command\Commands\\';

    public static function getCommand(string $action = 'Default'): Command
    {
        if (preg_match('/\W/', $action)) {
            throw new \Exception ('Недопустимые символы в команде');
        }

        $class = ucfirst(strtolower($action)) . 'Command';
        $file = __DIR__ . self::$dir . "/{$class}.php";

        if (! file_exists($file)) {
            throw new CommandNotFoundException("Файл '$file' не найден");
        }
        require_once($file);

        if (! class_exists($class = self::$commandNamespace . $class)) {
            throw new CommandNotFoundException( "Класс '$class' не обнаружен");
        }
        return new $class();
    }
}