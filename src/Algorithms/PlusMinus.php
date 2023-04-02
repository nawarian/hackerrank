<?php

declare(strict_types=1);

namespace Nawarian\Hackerrank\Algorithms;

class PlusMinus
{
    /**
     * @param int[] $arr
     *
     * @return string[]
     */
    public static function plusMinus(array $arr): array
    {
        $total = count($arr);
        $positives = 0;
        $negatives = 0;
        $zeroes = 0;

        foreach ($arr as $numero) {
            if ($numero > 0) {
                $positives++;
            }

            if ($numero < 0) {
                $negatives++;
            }

            if ($numero === 0) {
                $zeroes++;
            }
        }

        $ratioPositives = $positives / $total;
        $ratioNegatives = $negatives / $total;
        $ratioZeroes = $zeroes / $total;

        return [
            number_format($ratioPositives, 6, '.', ','),
            number_format($ratioNegatives, 6, '.', ','),
            number_format($ratioZeroes, 6, '.', ','),
        ];
    }
}
