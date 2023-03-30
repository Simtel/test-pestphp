<?php

declare(strict_types=1);

use App\Compare;

it('failed compare string', static function () {
    $compare = new Compare();

    expect($compare->compareStr('a', 'b'))->toBeFalse();
});

it('valid compare string', static function () {
    $compare = new Compare();

    expect($compare->compareStr('a', 'a'))->toBeTrue();
});
