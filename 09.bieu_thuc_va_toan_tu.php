<?php

/**
 * Biểu thức và toán tử trong PHP
 */
$a = 1;
$b = 5;
$total = $a + $b + 10;
// Biểu thức $a + $b + 10
// Toán hạng: $a, $b, 10, $total
// Toán tử: +, =
echo "a = $a <br/> b = $b <br/> Total = $total <br/>";

/**Toán tử gán
 * syntax: $tenBien = giá_trị
 */
$age = 30;
echo "age = $age<br/>";
const _MY_WEBSITE = "https://tranvuhoang.github.io";
echo '<a href="' . _MY_WEBSITE . '">My website</a> <br/>';

# Toán tử gán .=
$outputStr = "Learn PHP";
echo "$outputStr <br/>";
$outputStr .= " language"; // <-> $outputStr = $outputStr . "language";
echo "$outputStr <br/>";

#Toán tử cộng(+)
$a = 10;
$b = 20;
$total = $a + $b;
echo "Total: $a + $b = $total <br/>";

#Toán từ trừ(-)
$result = $a - $b;
echo "Hiệu: $a - $b = $result <br/>";

#Toán tử nhân
$result = $a * $b;
echo "Tích: $a . $b = $result <br/>";

#Toán tử chia(/)
$a = 15;
$b  = 10;
$result = $a / $b;
echo "Thương: $a / $b = $result <br/>";

#Toán tử chia lấy dư(%)
$result = $a % $b;
echo "Chia lấy dư: $a % $b = $result <br/>";

#Toán tử lũy thừa(**)
$a = 2;
$b = 10;
$result = $a ** $b;
echo "Lũy thừa: $a ^ $b = $result <br/>";

#Toán tử ++
echo "Toán tử giảm (++) <hr/>";
$count = 0;
$result = $count++;
$result = $count++;
echo "$count <br/>";

#Phân biệt $count++ và ++$count
#TH1 $count++
$count = 0;
$result = $count++; // <-> $result = $count = 0; $count = $count+1 = 0 + 1 = 1;
echo "count = $count <br/>";
echo "result = $result <br/>";

#TH2 ++$count

$count = 0;
$result = ++$count; // $count = $count + 1 = 0 + 1 = 1; $result = $count = 1
echo "count = $count <br/>";
echo "result = $result <br/>";

#Toán tử giảm (--)
echo "Toán tử giảm (--) <hr/>";
$count = 1;
$count--;
--$count;
echo "count = $count <br/>";
