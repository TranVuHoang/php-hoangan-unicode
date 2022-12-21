<?php

/**
 * Kiểu dữ liệuArray - Mảng trong PHP
 * - Kiểu dữ liệu đơn: String, Boolean, Null, Number
 * #1. Cộng 100 số nguyên
 * # Thêm phần tử vào mảng
 *
 */

$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Khai báo mảng lưu trữ danh sách ô tô
#Cách 1 khai báo mảng 1 chiều liên tục(mảng chỉ có value, và có key mặc định)
$listCars = [
    "Vinfast",
    "Honda",
    "Kia",
    "Toyota",
    null,
    30
];
// debug
echo "debug bằng hàm var_dump()<br/>";
echo '<pre>';
var_dump($listCars);
echo '</pre>';

// Xuất cấu trúc mảng bằng hàm print_r()
echo "<hr/>Cấu trúc mảng:";
echo "<pre>";
print_r($listCars);
echo "</pre>";

echo "<hr/>Cấu trúc mảng:";
echo "<pre>";
var_dump($listCars);
echo "</pre>";
echo "<hr/>";

#2. Khai báo mảng 1 chiều có key xác định(key là chuỗi)
$user = [
    "Unicode",
    "name"      => "Hoàng Trần",
    10          => "PHP",
    "Reactjs",
    "position"  => "Kỹ sư phát triển phần mềm",
    "age"       => 25,
    "Vuejs"
];
echo "<pre>" . "Cấu trúc mảng";
print_r($user);
echo "</pre>";

// Thêm phần tử vào mảng
#Cách 1: Thêm khi khai báo(thêm trực tiếp khi khai báo)
#Cách 2: Thêm sau khi khai báo.

//Khai báo mảng rỗng
$customer = [];
echo "<pre>" . "Cấu trúc mảng";
print_r($customer);
echo "</pre>";
