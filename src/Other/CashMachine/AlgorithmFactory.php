<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine;

class AlgorithmFactory
{
    private static string $dir = '/Algorithms';
    private static string $algorithmNamespace = 'DesignPatterns\Src\Other\CashMachine\Algorithms\\';

    public static function getAlgorithm(string $algorithm = 'Greedy'): Algorithm
    {
        if (preg_match('/\W/', $algorithm)) {
            throw new \Exception ('Недопустимые символы в команде');
        }

        $class = ucfirst(strtolower($algorithm)) . 'Algorithm';
        $file = __DIR__ . self::$dir . "/{$class}.php";

        if (! file_exists($file)) {
            throw new \Exception("Файл '$file' не найден");
        }
        require $file;

        if (! class_exists($class = self::$algorithmNamespace . $class)) {
            throw new \Exception( "Класс '$class' не обнаружен");
        }
        //var_dump((new \ReflectionClass(new $class()))->getShortName());
        return new $class();
    }
}