<?php
/**
 * 2520 - самое маленькое число, которое делится без остатка на все числа от 1 до 10.
 * Какое самое маленькое число делится нацело на все числа от 1 до 20?
 */

function check(int $chislo){
    for ($i = 20; $i > 1; $i--) {
        if ($chislo % $i != 0) {
            return false;
        }
    }
    return true;
}

$minchislo = 0;
for ($num = 2520; $minchislo == 0; $num++) {
    if (check($num)) {
        $minchislo = $num;

    }
}

echo $minchislo . PHP_EOL;