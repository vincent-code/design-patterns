<?php

declare(strict_types=1);

namespace DesignPatterns\Src\Other\CashMachine;

class Storage
{
    const STORAGE_PATH = '/storage/storage.json';

    public static function getNotes(): array
    {
        return json_decode(file_get_contents(__DIR__ . self::STORAGE_PATH), true);
    }

    public static function getStorageAmount(): int
    {
        $amount = 0;
        foreach (self::getNotes() as $note => $count) {
            $amount += $note * $count;
        }
        return $amount;
    }

    public static function checkAvailable(int $amount)
    {
        if (self::getStorageAmount() === 0) {
            throw new \Exception( "В банкомате нет наличных");
        } else if (self::getStorageAmount() < $amount) {
            throw new \Exception( "В банкомате недостаточно средств для выдачи запрашиваемой суммы");
        }
        return true;
    }

    public static function update(array $notesInStorage, array $notesToDispense)
    {
        foreach ($notesInStorage as $note => $count) {
            if (isset($notesToDispense[$note])) {
                $notesInStorage[$note] -= $notesToDispense[$note];
            }
        }
        file_put_contents(__DIR__ . self::STORAGE_PATH, json_encode($notesInStorage));
    }
}