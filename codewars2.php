<?php
/**
 * Проверьте, есть ли в строке одинаковое количество символов «x» и «o».
 * Метод должен возвращать логическое значение и не учитывать регистр.
 * Строка может содержать любой символ.
 * Примеры ввода / вывода:
 *
 * XO("ooxx") => true
 * XO("xooxx") => false
 * XO("ooxXm") => true
 * XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
 * XO("zzoo") => false
 */
function xo(string $symbols){
    $symbols = mb_strtolower($symbols);
    $o = substr_count($symbols, 'o');
    $x = substr_count($symbols, 'x');

    return $x == $o;
}
