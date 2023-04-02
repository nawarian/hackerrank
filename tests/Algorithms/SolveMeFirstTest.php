<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Tests\Algorithms;

use Nawarian\Hackerrank\Algorithms\SolveMeFirst;
use PHPUnit\Framework\TestCase;

class SolveMeFirstTest extends TestCase
{
    public function testSolveMeFirst(): void
    {
        $a = 7;
        $b = 3;

        self::assertEquals(10, SolveMeFirst::solveMeFirst($a, $b));
    }
}
