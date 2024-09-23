<?php

$arr = [
    ['table', 1000],
    ['chair', 100],
    ['chair', 100],
    ['chair', 100],
    ['bed', 10000],
];

// $arr[1][1] = 500;
// array_shift($arr);
// array_pop($arr);
array_splice($arr, 2, 2);

foreach ($arr as $item) {
    echo '<div>' . $item[0] . 'は' . $item[1] . '円です。</div>';
}
