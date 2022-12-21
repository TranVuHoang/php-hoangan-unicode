<?php

/** Chuỗi là gì?
 * Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
 */
$exStr = 'Học lập trình PHP';
var_dump($exStr);
echo '<br/>';

$exStr = "Học lập trình PHP";
var_dump($exStr);
echo '<br/>';

// chuỗi là đoạn mã HTML
$exHtml = '<p><a href="https://unicode.vn">Unicode</a></p>';
echo $exHtml;

const _EX_HTML = '<h3>Học lập trình PHP</h3>';
echo _EX_HTML;
echo '<br/>';

/**
 * Nguyên tắc khi xử lý chuỗi
 * - Nếu chuỗi đặt trong dấu nháy kép("") thì các ký tự là dấu nháy kép "" bên trong chuỗi
 *    phải có ký tự escape (\) phía trước
 *  - vd: echo "Trung tâm đào tạp \"Unitop\" - Đào tạo lập trình PHP";
 * - Nếu chuỗi đặt trong cặp nháy kép mà có biến thì không cần nối chuỗi
 *  - vd: echo "sum = $sum";
 * -
 */

#Cách 1
$exStr = "Trung tâm đào tạo \"Unicode\" Hà Nội";
echo $exStr;
echo '<br/>';

#Cách 2
$exStr = 'Trung tâm đào tạo "Unicode" Hà Nội';
echo $exStr;
echo '<br/>';

$exHtml = "<p><a href=\"https://unicode.vn\">Unicode</a></p>";
$exHtml = '<p><a href="https://unicode.vn">Unicode</a></p>';
echo $exHtml;
echo '<br>';

/** Nối chuỗi
 * Để nối chuỗi trong PHP -> dùng dấu chấm (.)
 */

$selectHtml = '<select>';
for ($i = 2020; $i <= 2022; $i++) {
    $selectHtml .= '<option> Năm' . $i . '</option>';
}
$selectHtml .= '</select>';
echo $selectHtml;
