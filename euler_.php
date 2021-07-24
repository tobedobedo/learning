<?php
/**
 * Сумма простых чисел меньше 10 равна 2 + 3 + 5 + 7 = 17.
 * Найдите сумму всех простых чисел меньше двух миллионов.
 */

$sum = 2 + 3;

for ($num = 3; $num < 2000000; $num += 2) {
    if (natur($num)) {
        $sum += $num;
    }
}

echo $sum . PHP_EOL;

function natur($chislo){

    for ($z = 3 ; $z < $chislo ; $z += 2) {

        if ($chislo % $z == 0) {
            return false;
        } elseif ($z == $chislo - 2) {
            return true;
        }
    }
    if ($chislo == 3){
        return false;
    }
}



