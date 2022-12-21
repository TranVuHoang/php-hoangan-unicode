<?php

/**
 * 1. Toán tử gán
 * #1. +=
 * #2. -=
 * #3. *=
 * #4. /=
 * #5. %=
 *
 * 2. Toán tử so sánh
 *  - Trả về duy nhất 1 kiểu dữ liệu(true | false)
 * #1. >
 * #2. <
 * #3 ==
 * #4. >=
 * #5. <=
 */

#1. Toán tử +=
$a = 10;
$a += 10; // $a = $a + 10; <-> $a = 10 + 10 = 20
$a += 20; // $a = $a + 20; <-> $a = 20 + 20 = 40
echo "a = $a <br/>";

#2. Toán tử -=
$a = 10;
$a -= 5;
echo "a = $a <br/>"; // 10-5=5

#3. Toán tử *=
$a = 10;
$a *= $a;
echo "a = $a <br/>"; // 10 * 10 = 100

#4. Toán tử /=
$a = 10;
$a = $a /= 9;
echo "a = $a <br/>"; // 10 / 9 = 1.11111111

#5. Toán tử %=
$a = 10;
$a %= 6;
echo "a = $a <br/>";

#6. Toán tử so sánh: >, <, >=, <=
$a = 10;
$b = 11;

$check = $a < $b;
echo "check = $check <br/>";
var_dump($check);
echo "<br/>";

#7. Toán tử so sánh  về giá trị ==
$a = 10;
$b = '10';
$check = $a == $b;
var_dump($check); // boolean(true)
echo "<br/>";

#8. Toán tử so sánh về giá trị và kiểu dữ liệu
$a = 10;
$b = '10';
$check = $a === $b;
var_dump($check); // boolean(false)
echo "<br/>";

#9. Toán tử khác (!=) so sánh về giá trị
$a = 10;
$b = '10';
$check = $a != $b;
var_dump($check); // boolean(false)
echo "<br/>";

#10. Toán tử quan hệ (&&)
/** &&
 * - cả biểu thức đúng khi tất cả đúng
 * - 1 biểu thức con sai -> tất cả sai
 *
 */
$a = 10;
$b = 15;
$c = 20;
$check = ($a >= 10) && ($b >= 16);
var_dump($check);
echo "<br/>";

#TH gom nhóm
$check = $a >= 10 && ($b >= 15 && $c >= 25);
var_dump($check);
echo "<br/>";

#11. Toán tử hoặc (||)
/** ||
 * - Cả biểu thức đúng khi 1 trong các biểu thức con đúng
 * - Cả biểu thức sai khi tất cả biểu thức con sai
 */
$a = 10;
$b = 15;
$check = $a >= 10 || $b <= 0;
var_dump($check);
echo "<br/>"; // boolean(true)

// Toán tử phủ định (!)
/** !
 *  - thường xử lý dữ liệu đúng sai
 */
$a = true;
$check = !$a;
var_dump($check);
echo "<br/>"; // boolean(true)

/** Độ ưu tiên: NOT > AND > OR */
