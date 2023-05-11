<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine\Algorithms;

use DesignPatterns\Src\Other\CashMachine\Algorithm;

class GreedyAlgorithm extends Algorithm
{
    public function execute(array $notesInStorage, int $amount): array
    {
        $notesToDispense = [];
        foreach ($notesInStorage as $note => $count) {
            if ($amount >= $note && $count > 0) {
                $notesToDispense[$note] = $count >= intdiv($amount, $note) ? intdiv($amount, $note) : $count;
                $amount -= $notesToDispense[$note] * $note;
            }
        }

        if ($amount === 0) {
            return $notesToDispense;
        } else {
            throw new \Exception("\nGreedyAlgorithm: некорректная сумма");
        }
    }
}