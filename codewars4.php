<?php
/**
 * Возвращает количество (количество) гласных в заданной строке.
 * Мы будем считать a, e, i, o, u это ката гласными (но не y).
 * Входная строка будет состоять только из строчных букв и / или пробелов.
 */

function glasnie($str): int
{
    //  $glasnie = ['a', 'e', 'i', 'o', 'u'];
    $sum = 0;
    for($index = 0 ; $index < strlen($str) ; $index++) {
//        if (in_array($str[$index], $glasnie)) {
//            $sum++;
//        }
        if
        (
            ($str[$index] == 'a') or
            ($str[$index]== 'e') or
            ($str[$index] == 'i') or
            ($str[$index] == 'o') or
            ($str[$index] == 'u')
        ){
            $sum += 1;
        }
    }

    return $sum;
}

echo glasnie('kotik') . PHP_EOL;
