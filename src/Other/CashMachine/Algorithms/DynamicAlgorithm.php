<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine\Algorithms;

use DesignPatterns\Src\Other\CashMachine\Algorithm;

class DynamicAlgorithm extends Algorithm
{
    /**
     * Ключи массива содержат возможные суммы для выдачи, значения - типы купюр.
     */
    private array $availableAmounts = [
        0 => 0
    ];

    public function execute(array $notesInStorage, int $amount): array
    {
        foreach ($notesInStorage as $note => $count) {
            while ($count > 0) {
                $newAmounts = [];

                foreach ($this->availableAmounts as $amnt => $noteVal) {
                    $newAmount = $amnt + $note;
                    if ($newAmount <= $amount && ! isset($this->availableAmounts[$newAmount])) {
                        $newAmounts[$newAmount] = $note;
                    }
                }

                $this->availableAmounts += $newAmounts;

                if (isset($this->availableAmounts[$amount])) {
                    while ($amount > 0) {
                        $notesToDispense[] = $this->availableAmounts[$amount];
                        $amount -= $this->availableAmounts[$amount];
                    }
                    return $notesToDispense;
                }
                $count--;
                //var_dump($this->availableAmounts);
            }
        }

        throw new \Exception("\nDynamicAlgorithm: некорректная сумма");
    }
}