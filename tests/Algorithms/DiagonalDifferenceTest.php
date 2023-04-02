<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Tests\Algorithms;

use Nawarian\Hackerrank\Algorithms\DiagonalDifference;
use PHPUnit\Framework\TestCase;

class DiagonalDifferenceTest extends TestCase
{
    /** @dataProvider diagonalDifferenceDataProvider */
    public function testDiagonalDifference(array $arr, int $expected): void
    {
        self::assertEquals($expected, DiagonalDifference::diagonalDifference($arr));
    }

    public function diagonalDifferenceDataProvider(): array
    {
        $array1 = [
            [1, 2, 3],
            [4, 5, 6],
            [9, 8, 9],
        ];
        $expected1 = 2;

        $array2 = [
            [11, 2, 4],
            [4, 5, 6],
            [10, 8, -12],
        ];
        $expected2 = 15;

        $array3 = [
            [10, 20, 30, 40],
            [50, 60, 70, 80],
            [5, 10, 15, 20],
            [13, 21, 51, 69],
        ];
        $expected3 = 21;

        return [
            [$array1, $expected1],
            [$array2, $expected2],
            [$array3, $expected3],
        ];
    }
}
