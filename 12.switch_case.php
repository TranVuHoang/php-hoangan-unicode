<?php

/** switch case
 * #1. Tạo cấu trúc switch case
 * #2. Kiểm tra thứ trong tuần:
 *      $number = 1 -> chủ nhật
 *      $number = 2 -> thứ 2
 *      $number = 3 -> thứ 3
 *      $number = 4 -> thứ 4
 *      $number = 5 -> thứ 5
 *      $number = 6 -> thứ 6
 */

#1. Tạo cấu trúc switch case
$number = 1;
switch ($number) {
    case 1: // kiểm tra $number == 1 hay k, đúng -> chạy code bên trong case 1:
        break;
    case 2:
        break;
    case 3:
        break;
    default;
        break;
}

#2. Kiểm tra thứ trong tuần:
$number = 0;
switch ($number) {
    case 2:
        echo "Thứ 2";
        break;
    case 3:
        echo "Thứ 3";
        break;
    case 4:
        echo "Thứ 4";
        break;
    case 5:
        echo "Thứ 5";
        break;
    case 6:
        echo "Thứ 6";
        break;
    case 7:
        echo "Thứ 7";
        break;
    case 1:
        echo 'Chủ nhật';
        break;
    default:
        echo 'không hợp lệ';
        break;
}

/**
 * Kiểm tra số ngày trong tháng
 * Input: nhập tháng, năm
 * Output: Đưa ra số ngày trong tháng
 *
 * Tháng có 31 ngày: 1, 3, 5, 7, 8, 10, 12
 * Tháng có 30 ngày: 4, 6, 9, 11
 * Tháng có 28, 29 ngày: 2 (năm nhuận <-> năm  chia hết cho 4)
*/
$month = 3;
$year = 2022;
