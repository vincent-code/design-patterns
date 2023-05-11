<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine;

class CashMachine
{
    private int $amount;
    private array $notes;
    private Algorithm $algorithm;


    public function __construct(Context $context)
    {
        if (Storage::checkAvailable((int)$context->get('amount'))) {
            $this->notes = Storage::getNotes();
        }

        $this->algorithm = AlgorithmFactory::getAlgorithm($context->get('algorithm'));

        if ($context->get('amount')) {
            $this->amount = (int)$context->get('amount');
        }
    }

    public function dispense(): array
    {
        if (isset($this->amount)) {
            $notesToDispense = $this->algorithm->execute($this->notes, $this->amount);
            Storage::update($this->notes, $notesToDispense);
            return $notesToDispense;
        } else {
            throw new \Exception( "Не указана сумма");
        }
    }
}