<?php

/** Đặt tên biến theo cú pháp camelCase */
$customerName = "Hoàng Trần";
$customerDetailEmail = "info@gmail.com";
$customerAge = 29;

echo $customerName;
echo "<br />";
echo "Học lập trình tại Unicode <br>";

echo $customerDetailEmail;
echo "<br>";

echo $customerAge;
echo "<br>";

$customerAge = 23;
echo $customerAge;
echo "<br>";

echo 50;

// Ghi chú trên 1 dòng
/**
 * Ghi chú trên nhiều dòng
 * # ghi chú 1
 * # ghi chú 2
 */

// hàm var_dump() để debug dữ liệu
echo "<br>";
var_dump($customerAge); // int(23)