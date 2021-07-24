<?php
/**
 * Сумма простых чисел меньше 10 равна 2 + 3 + 5 + 7 = 17.
 * Найдите сумму всех простых чисел меньше двух миллионов.
 */

/**
 * @param $num
 * @return bool
 */
function isSimple($num): bool
{
    for ($z = 3 ; $z < $num ; $z += 2) {
        if ($num % $z == 0) {
            return false;
        } elseif ($z == $num - 2) {
            return true;
        }
    }

    if ($num == 3){
        return false;
    }
}

for ($num = 3, $sum = 2 + 3; $num < 2000000; $num += 2) {
    if (isSimple($num)) {
        $sum += $num;
    }
}

echo $sum . PHP_EOL;