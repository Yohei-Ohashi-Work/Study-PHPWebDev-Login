<?php

// 条件分岐の基本的な書き方 （Part.1）
// AND(&&)条件、OR(||)条件 （Part.1）
// ==と===の違い （Part.2）

/**
 * 条件1：
 * 50点未満： 不合格
 * 50点以上70点未満： 合格
 * 70点以上： 秀
 * 
 * 条件2：
 * 欠席日数
 * 5日以上： 不合格
 */

$score = 70;
$absence = 5;

if ($score < 50 || $absence >= 5) {
    echo '不合格';
} elseif ($score < 70) {
    echo '合格';
} else {
    echo '秀';
}
