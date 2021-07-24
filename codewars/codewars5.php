<?php
/**
 * Создайте функцию, которая возвращает сумму двух наименьших положительных чисел,
 * заданных массивом минимум из 4 положительных целых чисел.
 */

function getSum($nums) {

    $min = [
        'index' => 0,
        'num' => $nums[0]
    ];

    $min2 = [
        'index' => 1,
        'num' => $nums[1]
    ];

    foreach ($nums as $index => $num) {

        if ($min['num'] > $num && $index != $min2['index']) {
            $min['index'] = $index;
            $min['num'] = $num;
        } elseif ($min2['num'] > $num && $index != $min['index']) {
            $min2['index'] = $index;
            $min2['num'] = $num;
        }
    }

   return $min['num'] + $min2['num'];
}

$test = [3, 1, 67, 2, 7];
echo getSum ($test) . PHP_EOL; // 1 + 2 = 3