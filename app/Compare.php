<?php

declare(strict_types=1);

namespace App;

class Compare
{
    public function compareStr(string|int $a, string|int $b): bool
    {
        if (gettype($a) !== gettype($b)) {
            throw new \InvalidArgumentException('Arguments must be of the same type');
        }
        return $a === $b;
    }
}
