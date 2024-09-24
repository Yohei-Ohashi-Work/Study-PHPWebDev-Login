<?php

/**
 * 税込金額を計算する関数
 * 
 * @param int $base_price 税抜金額
 * @param float $tax_rate 税率
 * @return int 税込金額
 * @see https://example.com
 * @author 大橋 庸平
 * @version 1.0.0
 */
function with_tax($base_price, $tax_rate = 0.1)
{
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

$price = with_tax(1000, 0.08);
echo $price;
