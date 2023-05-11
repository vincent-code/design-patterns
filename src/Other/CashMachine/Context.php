<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine;

class Context
{
    private array $params = [];
    private const DEFAULT_ALGORITHM = 'Greedy';

    public function __construct()
    {
        $this->params = $_REQUEST;
        if (! isset($this->params['algorithm'])) {
            $this->params['algorithm'] = self::DEFAULT_ALGORITHM;
        }
    }

    public function get(string $key): ?string
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }
}
