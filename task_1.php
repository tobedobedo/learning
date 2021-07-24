<?php
/**
 * Создайте функцию, которая возвращает сумму двух наименьших положительных чисел,
 * заданных массивом минимум из 4 положительных целых чисел.
 */

function getSum($chisla) {

    $min = [
        'index' => 0,
        'chislo' => $chisla[0]
    ];

    $min2 = [
        'index' => 1,
        'chislo' => $chisla[1]
    ];

    foreach ($chisla as $index => $chislo) {

        if ($min['chislo'] > $chislo && $index != $min2['index']) {
            $min['index'] = $index;
            $min['chislo'] = $chislo;
        } elseif ($min2['chislo'] > $chislo && $index != $min['index']) {
            $min2['index'] = $index;
            $min2['chislo'] = $chislo;
        }
    }

   return $min['chislo'] + $min2['chislo'];

}

$chisla = [3, 1, 67, 2, 7];
echo getSum ($chisla) . PHP_EOL;