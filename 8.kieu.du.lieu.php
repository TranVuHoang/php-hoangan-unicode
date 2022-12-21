<?php
## 1. Kiểu số nguyên (int)
$age = 25;

// kiểm tra kiểu dữ liệu trong PHP
var_dump($age);

# từ PHP 7.4 cho phép khai báo kiểu dữ liệu trước tên biến

$age = 10.54;
echo "<hr/>1. Biến age ban đầu: $age";

// Ép kiểu
$formatAge = (int) $age;
echo "<hr/>2.  Biến age sau khi ép kiểu int: $formatAge";

/**
 * Hàm kiểm tra kiểu số nguyên:
 *  - is_int(); or is_integer();
 */
echo "<hr/>Kiểm tra biến formatAge có là số nguyên k: " . is_integer($formatAge);

## 2. Kiểu boolean(logic)
$check = false;
echo "<hr/> value of bien check: $check <br/>";
var_dump($check);

$checkTruthy = 1;
var_dump((bool) $checkTruthy);

// Ép kiểu bool
$checkSum = (bool) $check;

// Kiểm tra kiểu dữ liệu của biến là boolean hay k?
is_bool($checkSum);

## 3. Kiểu float (số thực)
$number1 = 10;
echo "<hr/>";
var_dump($number1);

// Ép kiểu
$number2 = 10;
$number2 = (float) $number1;
echo "<hr>";
var_dump($number2);
echo "<hr>";
var_dump(is_float($number2));
