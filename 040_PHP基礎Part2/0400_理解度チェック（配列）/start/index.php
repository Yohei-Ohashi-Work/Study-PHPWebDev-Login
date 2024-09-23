<?php

/**
 * 商品名 => [価格, 在庫数]
 */
$products = [
    'table' => [1000, 2],
    'chair' => [500, 4],
    'bed' => [10000, 1],
    'light' => [5000, 1]
];

/**
 * 問１：商品一覧
 * 
 * 商品一覧
 * tableは1000円で2個存在します。
 * chairは500円で4個存在します。
 * bedは10000円で2個存在します。
 * lightは5000円で1個存在します。
 */
echo '<div>商品一覧</div>';
foreach ($products as $product => $value) {
    echo "<div>{$product}は{$value[0]}円で{$value[1]}個存在します。</div>";
}

echo '<br>';
echo '<div>//----------------------------------//</div>';
echo '<br>';

/**
 * 問２：商品購入
 * 
 * $cartの品物を買いたいと想定して、
 * $productsの在庫数が足りている場合、足りていない場合で
 * 以下のように画面に表示してください。
 * 
 * 商品購入
 * tableを1個ください。
 * はい。ありがとうございます。 <- 足りている場合
 * bedを2個ください。
 * すいません。bedは1個しかありません。 <- 足りていない場合
 */

// 購入希望 商品数
$cart = [
    'table' => 3,
    'bed' => 2,
];

$total = 0;

echo '<div>商品購入</div>';
foreach ($cart as $product => $quantity) {
    echo "<div>{$product}を{$quantity}個ください。</div>";
    if ($products[$product][1] >= $quantity) {
        echo '<div>はい。ありがとうございます。</div>';
        $total += $products[$product][0] * $quantity;
    } else {
        echo "<div>すいません。{$product}は{$products[$product][1]}個しかありません。</div>";
        $total += $products[$product][0] * $products[$product][1];
    }
}
echo '<div>合計金額' . number_format($total) . '円です。</div>';
