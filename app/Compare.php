<?php

declare(strict_types=1);

namespace App;

class Compare
{
    public function compareStr(string $a, string $b): bool
    {
        return $a === $b;
    }
}
