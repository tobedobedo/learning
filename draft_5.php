<?php
/**
 * 2520 - самое маленькое число, которое делится без остатка на все числа от 1 до 10.
 * Какое самое маленькое число делится нацело на все числа от 1 до 20?
 */

function check(int $chislo) {

    for ($i = 20; $i > 1; $i--) {

        if ($chislo % $i != 0) {
            return false;
        }
    }

    return true;
}

$minChislo = 0;
$num = 2520;

while ($minChislo == 0) {
    if (check($num)) {
        $minChislo = $num;
    }

    $num++;
}

echo $minChislo . PHP_EOL;