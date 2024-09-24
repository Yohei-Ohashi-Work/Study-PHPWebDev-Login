<?php

$price = 1000;

function withTax($basePrice, $taxRate = 0.1)
{
    $sumPrice = $basePrice * (1 + $taxRate);
    $sumPrice = round($sumPrice);
    return number_format($sumPrice);
}
$fn = "withTax";
$price = $fn($price, 0.08);
echo $price . '円';
