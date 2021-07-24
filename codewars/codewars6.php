<?php
/**
 * You are given two arrays a1 and a2 of strings.
 * Each string is composed with letters from a to z.
 * Let x be any string in the first array and y be any string in the second array.
 * Find max(abs(length(x) − length(y)))
 * If a1 and/or a2 are empty return -1 in each language except in Haskell (F#) where you will return Nothing (None).
 */

/**
 * @param $a1
 * @param $a2
 * @return int
 */
function maxDif($a1, $a2): int
{
    if ((count($a1) == 0) or (count($a2) == 0)){
        return -1;
    }

    $max = 0;

    foreach ($a1 as $s1) {

        foreach ($a2 as $s2) {

            $dif = strlen($s1) - strlen($s2);
            $dif = abs($dif);

            if ($dif > $max) {
                $max = $dif;
            }
        }
    }

    return $max;
}