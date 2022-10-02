<?php
//1-й вариант

$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$evenOddCheck = function (int $el): string {
    return ($el & 1) ? 'нечётное' : 'чётное';
};

$evenOdd = array_map($evenOddCheck, $mas);

print_r($evenOdd);

//2-й вариант
$foo = fn ($n) => ($n & 1) ? 'нечетное' : 'чётное';

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$arr2 = array_map($foo, $arr);
