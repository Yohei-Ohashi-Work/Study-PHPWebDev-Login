<?php

$arr = [
    'name' => 'Bob',
    'age' => 12,
    'sports' => ['baseball', 'swimming'],
];

unset($arr['name']);
$arr['age'] += 24;

echo '<div>' . $arr['name'] . '</div>';
echo '<div>' . $arr['age'] . '</div>';
echo '<div>' . $arr['sports'][0] . '</div>';
echo '<div>' . $arr['sports'][1] . '</div>';
