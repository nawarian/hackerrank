<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Algorithms;

class CompareTriplets
{
    /**
     * @param int[] $a
     * @param int[] $b
     * @return int[]
     */
    public static function compareTriplets(array $a, array $b): array
    {
        $alice = 0;
        $bob = 0;

        for ($i = 0; $i < 3; ++$i) {
            if ($a[$i] > $b[$i]) {
                $alice++;
            }

            if ($a[$i] < $b[$i]) {
                $bob++;
            }
        }

        return [$alice, $bob];
    }
}
