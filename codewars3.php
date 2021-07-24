<?php
/** You are going to be given an array of integers.
 * Your job is to take that array and find an index N
 * where the sum of the integers to the left of N is
 * equal to the sum of the integers to the right of N.
 * If there is no index that would make this happen, return -1.
 */

function find_even_index($arr){

    $sumArr = array_sum($arr);
    $sumNum = 0;

    foreach ($arr as $index => $num) {

        if ((($sumArr - $num) / 2) == $sumNum) {
            return $index;
        }

        $sumNum += $num;
    }

    return -1;
}

//function find_even_index($arr){
//    $sum = array_sum($arr);
//    $partialSum = 0;
//
//    foreach ($arr as $i => $value) {
//        if ($sum - $partialSum - $value === $partialSum) {
//            return $i;
//        }
//
//        $partialSum += $value;
//    }
//
//    return -1;
//}