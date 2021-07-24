<?php

//$loh= ['kh', 459, false];
//$loh[0] = 'ira';
//
////var_dump($loh);
//
//$nums = [
//    584,
//    9841,
//    13,
//    562,
//    56,
//    23654,
//];
//
//
//foreach ($nums as $num) {
//    //echo $num . PHP_EOL;
//    if ($num % 2 == 0) {
//        echo $num . PHP_EOL;
//    }
//
//}
//$a = 50;
//$b = 25;
//
////echo $a * $b . PHP_EOL;
//
//echo --$a . PHP_EOL;
//echo --$b . PHP_EOL;
//$numbers = [];
//
//for ($x = 0; $x <= 100; $x++) {
//    if ($x % 2 == 0) {
//        $numbers[] = $x;
//    }
//}
//
//foreach ($numbers as $num){
//    echo $num . ' jhg ';
//}


 /**
 * объявлен массив $numbers
 *
 * задача:
 * - наполнить массив только чётными числами от 0 до 100, используя цикл for и if в его теле
 * - вывести числа из массива через пробел, используя цикл foreach
 */

//$numbers = [];
//
//$x = 0;
//while ($x <= 100) {
//
//    $numbers[] = $x;
//    $x = $x + 2;
//}
//
//for ($x=0 ; $x <= 100 ; $x = $x + 2) {
//}

//while (true) {}

// первый прямоугольник
$a = 1;
$b = 2;

// второй прямоугольник
$c = 3;
$d = 4;

// третий прямоугольник
$e = 5;
$f = 6;

$per1 = vivestiPloschad(2, 4);
$per2 = vivestiPloschad(6, 7);
$result = get($per1, $per2);

function vivestiPloschad ($dlina, $shirina)
{
    $square = get($dlina, $shirina);
    $perimetr = ($dlina + $shirina) * 2;

    echo 'Площадь прямоугольника равна ' . $square . PHP_EOL;

    return $perimetr;
}

function get($mnozhitel1, $mnozhitel2){
    $proizvedenie = $mnozhitel1 * $mnozhitel2;

    return $proizvedenie;
}

1 == '1';
1 === '1';


