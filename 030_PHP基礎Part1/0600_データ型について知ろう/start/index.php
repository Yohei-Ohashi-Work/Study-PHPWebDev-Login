<?php
// データ型とは？
$i = 1;
$b = true;
$str = 'hello';
var_dump($b);
// データ型の確認方法 var_dump()

// 異なる型は自動的に変換される。
// echo $i + (int) $b;

// 型の取り扱いの注意点
var_dump($i === '1');
