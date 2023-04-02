<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Tests\Algorithms;

use Nawarian\Hackerrank\Algorithms\PlusMinus;
use PHPUnit\Framework\TestCase;

class PlusMinusTest extends TestCase
{
    /** @dataProvider plusMinusDataProvider */
    public function testPlusMinus(array $arr, array $expected): void
    {
        self::assertEquals($expected, PlusMinus::plusMinus($arr));
    }

    public function plusMinusDataProvider(): array
    {
        return [
            [[-4, 3, -9, 0, 4, 1], ['0.500000', '0.333333', '0.166667']],
            [[1, 2, 3, -1, -2, -3, 0, 0], ['0.375000', '0.375000', '0.250000']],
        ];
    }
}
