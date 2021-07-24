<?php

/**
 * Каждый следующий элемент ряда Фибоначчи получается при сложении двух предыдущих.
 * Начиная с 1 и 2, первые 10 элементов будут:
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 * Найдите сумму всех четных элементов ряда Фибоначчи, которые не превышают четыре миллиона.
 */

$znachenie1 = 1;
$znachenie2 = 1;
$sum = 0;

while ($znachenie2 < 4000000) {

    $znachenie1 = $znachenie1 + $znachenie2;
    $znachenie2 = $znachenie1 + $znachenie2;

    echo $znachenie1 . ' ' . $znachenie2 . PHP_EOL;

    if(($znachenie2 % 2 == 0) && ($znachenie2 < 4000000)){
        $sum = $sum + $znachenie2;
    }

    if (($znachenie1 % 2 == 0) && ($znachenie1 < 4000000)){
        $sum = $sum + $znachenie1;
    }
 //       echo $znachenie2 . PHP_EOL;
}
echo $sum . PHP_EOL;
