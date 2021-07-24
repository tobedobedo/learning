<?php
/**
 * 2520 - самое маленькое число, которое делится без остатка на все числа от 1 до 10.
 * Какое самое маленькое число делится нацело на все числа от 1 до 20?
 */

/**
 * проверяет делится ли $num без остатка
 * на числа от 1 до 20
 *
 * @param int $num
 * @return bool
 */
function check(int $num): bool
{
    for ($i = 20; $i > 1; $i--) {
        if ($num % $i != 0) {
            return false;
        }
    }

    return true;
}

for ($num = 2520, $minNum = null; $minNum == null; $num += 2) {
    if (check($num)) {
        $minNum = $num;
    }
}

echo $minNum . PHP_EOL;