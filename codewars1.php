<?php
/**
 * Завершите функцию квадратной суммы,
 * чтобы она возводила в квадрат каждое переданное в нее число,
 * а затем суммировала результаты.
 * Например, для [1, 2, 2] он должен вернуть 9, потому что 1 ^ 2 + 2 ^ 2 + 2 ^ 2 = 9.
 */

function square_sum($numbers) : int {
    $sum = 0;
    foreach ($numbers as $num){
        $kvadrat = $num * $num;
        $sum = $sum + $kvadrat;
    }
    return $sum;
}

$numbers = [1, 3, 6, 7];
echo square_sum($numbers);