<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Tests\Algorithms;

use Nawarian\Hackerrank\Algorithms\SimpleArraySum;
use PHPUnit\Framework\TestCase;

class SimpleArraySumTest extends TestCase
{
    /** @dataProvider simpleArraySumDataProvider */
    public function testSimpleArraySum(array $ar, int $expected): void
    {
        self::assertEquals($expected, SimpleArraySum::simpleArraySum($ar));
    }

    public function simpleArraySumDataProvider(): array
    {
        return [
            [[1, 2, 3], 6],
            [[1, 2, 3, 4, 10, 11], 31],
        ];
    }
}
