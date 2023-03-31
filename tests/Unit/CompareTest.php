<?php

declare(strict_types=1);

use App\Compare;

beforeEach(function () {
    $this->compare = new Compare();
});

it('failed compare string', function () {
    expect($this->compare->compareStr('a', 'b'))->toBeFalse();
});

it('valid compare string', function () {
    expect($this->compare->compareStr('a', 'a'))->toBeTrue();
});

it('valid compare with dataset', function ($a, $b, $result) {
    expect($this->compare->compareStr($a, $b))->toBe($result);
})->with([
    'valid' => ['a', 'a', true],
    'not valid' => ['a', 'b', false]
]);

it('expect exception not same type', function () {
    $this->compare->compareStr('a', 1);
})->throws(InvalidArgumentException::class);
