<?php

/**
 * Biến trong PHP
 * 1. Tạo biến
 * 2. Xuất giá trị của biên lên trình duyệt
 */

#1. đặt tên biến theo kiểu camelCase(lạc đà)
$fullName = "Hoàng Trần";
$customerDetailEmail = "tranvuhoangjr@gmail.com";
$age = 25;

#2. Xuất(In) giá trị của biến
echo $fullName;
echo "<br/>";
echo "Học lập trình PHP <br/>";
echo $customerDetailEmail . "<br/>";
echo $age;
$age = 29;
echo "<br/> $age";
echo "<br/>" . 50 . "<br/>";

// Ghi chú trên 1 dòng
# Ghi chú 1 dòng

/**
 * Ghi chú trên nhiều dòng
 * Ghi chú dòng 1
 * Ghi chú dòng 2
 * */


/** Debug dữ liệu
 * - var_dump($...) trả về kiểu string và độ dài
 * - print_r($...) in mảng hoặc đối tượng
*/
var_dump($fullName);
