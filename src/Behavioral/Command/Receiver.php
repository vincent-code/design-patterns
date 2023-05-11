<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Behavioral\Command;

class Receiver
{
    private array $params = [];
    private array $output = [];

    public function setParam(string $key, $val)
    {
        $this->params[$key] = $val;
    }

    public function getParam(string $key): ?string
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }

    public function write(string $key, string $value)
    {
        $this->output[$key] = $value;
    }

    public function getOutput(): array
    {
        return $this->output;
    }
}