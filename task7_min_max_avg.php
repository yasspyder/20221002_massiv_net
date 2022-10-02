<?php
// max - наибольшее число, min - наименьшее число, avg - среднее арифметическое всех чисел массива

$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$aggregationData = function (array $numbers): array {
    return [
        'max' => max($numbers),
        'min' => min($numbers),
        'avg' => array_sum($numbers) / count($numbers),
    ];
};

print_r($aggregationData($mas));
