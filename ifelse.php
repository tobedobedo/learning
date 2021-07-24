<?php
function getColor ()
{
    return 'blue';
}

$color = getColor();

if ($color == 'red') {
    $id = 134235;
} elseif ($color == 'green') {
    $id = 34;
} else {
    $id = 3;
}

echo $id . PHP_EOL;

/**
 * если id больше 1 и меньше 10, то вывести что оно больше единицы
 * если id больше 10 и меньше 100, то вывести что оно больше 10
 * если id больше 100, то вывести что оно больше 100
 */

//if ( $id > 1 && $id < 10 ) {
//    echo 'Число больше единицы' . PHP_EOL;
//} elseif ( $id > 10 && $id < 100 ){
//    echo 'Число больше 10' . PHP_EOL;
//} elseif ( $id > 100){
//    echo 'Число больше 100' . PHP_EOL;
//}

if ($id > 100){
    echo 'Число больше 100' . PHP_EOL;
} elseif ($id > 10) {
    echo 'Число больше 10' . PHP_EOL;
} else {
    echo 'Число больше единицы' . PHP_EOL;
}

switch ($id) {

    case 134235:
        echo 'first case' . PHP_EOL;
        break;

    case 34:
        echo 'second case' . PHP_EOL;
        break;

    case 3:
        echo 'third case' . PHP_EOL;
}