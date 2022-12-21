<?php

/**
 * Câu lệnh điều kiện
 * #1. if
 * #2. if else
 * #3. if elseif kết hợp
 * #4. if else lồng nhau
 */

#1. Cấu trúc if
$number = 10;
$check = $number > 0;
// var_dump($check);
echo "<br/>";

if ($check) { // <-> if($check == true)
    echo "$number là số nguyên dương <br/>"; // 1 là số nguyên dương
}

#2. Cấu trúc if else
$number = -1;
$check = $number > 0;
if ($check) {
    echo $number . ' là số nguyên dương' . '<br/>';
} else {
    echo $number . ' không phải số nguyên dương' . '<br/>';
}

#3. Cấu trúc if elseif kết hợp
/**
 * Nếu $number < 0 -> số âm
 * Nếu $number == 0 -> số không
 * Nếu $number > 0 && $number < 5 -> số nhỏ
 * Nếu $number > 5 && $number <= 10 -> số trung bình
 * Nếu $number > 10 && $number <= 15 -> số lớn
 * Nếu $number > 15 -> số cực lớn
 */
$number = 159;
if ($number < 0) {
    echo $number . ' là số âm' . '<br/>';
} elseif ($number == 0) {
    echo $number . ' là số không' . '<br/>';
} elseif ($number > 0 && $number < 5) {
    echo $number . ' là số nhỏ';
} elseif ($number <= 10) {
    echo $number . ' là số trung bình' . '<br>';
} elseif ($number <= 15) {
    echo $number . ' là số lớn' . '<br/>';
} else {
    echo $number . ' là số cực lớn ' . '<br/>';
}

#4. Cấu trúc if else lồng nhau
$number = 10;
if ($number > 0) { // đk cha
    if ($number >= 5) { // đk con
        echo 'Thỏa mãn điều kiện <br/>';
    } else {
        echo 'Không thỏa mãn điều kiện';
    }
} else {
    echo 'Không thỏa mãn điều kiện';
}
