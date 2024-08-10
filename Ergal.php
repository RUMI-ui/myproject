<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum_0 = 0;
$sum_1 = 0;
foreach ($array as $number) {
    if ($number % 2 === 1) {
        $sum_0 = $sum_0 + $number;
    } else {
        $sum_1 = $sum_1 + $number; 
    }
}

echo $sum_0 . " - сумма не четных чисел ";
echo $sum_1 . " - сумма четных чисел";