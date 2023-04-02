<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Algorithms;

class DiagonalDifference
{
    /**
     * @param int[][] $arr
     * @return int
     */
    public static function diagonalDifference(array $arr): int
    {
        $left = 0;
        $right = 0;

        $size = count($arr);

        for ($i = 0; $i < $size; ++$i) {
            $left += $arr[$i][$i];
            $right += $arr[$i][$size - 1 - $i];
        }

        return abs($left - $right);
    }
}
