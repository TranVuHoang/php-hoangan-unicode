<?php

/**
 * Bài tập luyện tập vòng lặp for
 * #1. Hiển thị số chẵn, số lẻ trong dãy số từ: 1 2 3 4 5 ... 100
 * #2. Tính giai thừa của 1 số và hiển thị kết quả
 */

#1. Hiển thị số chẵn, số lẻ trong dãy số từ: 1 2 3 4 5 ... 100
$startIndex = 1;
$endIndex = 100;

$resultEven = null; // sô chẵn
$resultOdd = null; // số lẻ

$evenCount = 0; // đếm số chẵn
$oddCount = 0; // đêm số lẻ

for ($index = $startIndex; $index <= $endIndex; $index++) {

    if ($index % 2 == 0) {
        $resultEven .= $index . ' ';
        $evenCount++;
    } else {
        $resultOdd .= $index . ' ';
        $oddCount++;
    }
}

if ($evenCount > 0) {
    echo 'Tìm thấy ' . $evenCount . ' số chẵn: ' . $resultEven . '<br/>';
} else {
    echo 'Không tìm thấy số chẵn <br/>';
}

if ($oddCount > 0) {
    echo 'Tìm thấy ' . $oddCount . ' số lẻ: ' . $resultOdd . '<br/>';
} else {
    echo 'Không tìm thấy số chẵn <br/>';
}

#2. Tính giai thừa của 1 số và hiển thị kết quả: (n!)
$n = 5;

if ($n > 0) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    echo "$n! = $result";
} else {
    echo $n . ' không hợp lệ';
}
