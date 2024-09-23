<?php

$char = '<h2>1ZAabd12_sscc</h2>';

if (preg_match('/.+/i', $char, $result)) {
    echo '検索成功';
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} else {
    echo '検索失敗';
}
