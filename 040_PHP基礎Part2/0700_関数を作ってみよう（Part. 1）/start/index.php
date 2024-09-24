<?php

$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo "合計： " . sum($numbers) . "<br>";
echo "合計： " . sum($numbers2) . "<br>";
