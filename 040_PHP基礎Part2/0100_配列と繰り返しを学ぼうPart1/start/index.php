<?php

$arr = ['taro', 'hanako', 'jiro'];
$arr[1] = 'sachiko';
$arr[] = 'saburo';

for ($i = 0; $i < count($arr); $i++) {
    echo '<div>' . $arr[$i] . '</div>';
}

foreach ($arr as $i => $value) {
    echo '<div>' . $i . ': ' . $value . '</div>';
}
