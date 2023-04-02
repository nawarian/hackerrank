<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Tests\Algorithms;

use Nawarian\Hackerrank\Algorithms\CompareTriplets;
use PHPUnit\Framework\TestCase;

class CompareTripletsTest extends TestCase
{
    /** @dataProvider compareTripletsDataProvider */
    public function testCompareTriplets(array $a, array $b, array $expected): void
    {
        self::assertEquals(
            $expected,
            CompareTriplets::compareTriplets($a, $b),
        );
    }

    public function compareTripletsDataProvider(): array
    {
        return [
            [[1, 2, 3], [3, 2, 1], [1, 1]],
            [[5, 6, 7], [3, 6, 10], [1, 1]],
            [[17, 28, 30], [99, 16, 8], [2, 1]],
        ];
    }
}
