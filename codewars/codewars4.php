<?php
/**
 * Возвращает количество гласных в заданной строке.
 * Гласными считаются a, e, i, o, u.
 * Входная строка будет состоять только из строчных букв и / или пробелов.
 */

function sumVowels($str): int
{
    //  $glasnie = ['a', 'e', 'i', 'o', 'u'];
    $sum = 0;
    for($index = 0 ; $index < strlen($str) ; $index++) {
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
