<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine;

abstract class Algorithm
{
    /**
     * Метод вычисляет какими купюрами будет выдана запрашиваемая сумма.
     *
     * @param array $notesInStorage купюры в наличии
     * @param int $amount запрашиваемая сумма для выдачи
     * @return array купюры для выдачи
     * @throws \Exception
     */
    abstract public function execute(array $notesInStorage, int $amount): array;
}