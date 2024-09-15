<?php
/*
 - isset
 変数が定義されていて、null以外の値の時にtrueを返す。
 
 - empty
 issetがfalse、または値がfalsyな時にtrueを返す。

 !isset($val) || $val == false

 - falsyな値
 "" (空文字)
 0 (数値、文字列)
 NULL
 FALSE
*/

$a = "0";
$b = 1;

var_dump($a == false);
echo '<br>';

if (!isset($a) || $a == false) {
    echo 'Isset: true<br>';
} else {
    echo 'Isset: false<br>';
}

if (empty($a)) {
    echo 'NotEmpty: true<br>';
} else {
    echo 'NotEmpty: false<br>';
}
