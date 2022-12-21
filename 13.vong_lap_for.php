<?php

/**
 * Vòng lặp trong PHP
 */

#1. Vòng lặp for
// xác định số lần lặp
$count = 20;

// xác định giá trị ban đầu
$start = 0;

// vòng lặp
for ($i = $start; $i <= $count; $i += 2) {
    echo "Đây là vòng lặp $i <br/>";
}
echo '<hr/>';

/**
 * Ví dụ 1:
 * Tính tổng S = 1 + 2 + 3 + 4 + ... + 10
 */
$n = 10; // xác định số lần lặp
$s = 0; // giả định = 0
for ($i = 1; $i <= $n; $i++) {
    $s += $i;
}
echo 'Tổng S = ' . $s;
