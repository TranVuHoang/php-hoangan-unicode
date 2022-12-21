<?php

/**Các hàm xử lý chuỗi
 * #1. Thêm ký tự escape vào phía trước các ký tự mong muốn
 * - addcslashes($str, $listChar);
 *
 */

#1. Thêm ký tự escape vào phía trước các ký tự mong muốn
$str = 'Trung tâm đào tạo lập trình "Unicode"';
$str = addcslashes($str, 'l"'); // chèn ký tự escape (\) trước ký tự l, " -> \l "\
echo $str . '<hr/>';

#2. Thêm ký tự escape (\) vào trước dâu nháy ' ' or " "  và dấu escape \
$str = 'Trung tâm đào tạo \ lập trình "Unicode"';
echo 'Chuỗi ban đầu: <br/>' . $str . '<br/>';

$str = addslashes($str);
echo 'Chuỗi sau khi thêm dấu escape: <br/>' . $str . '<hr/>';

#3. Xóa tất cả ký tự escape (/) có trong chuỗi: stripslashes();
$str = 'Trung tâm đào tạo \\ lập trình \"Unicode\"';
echo 'Chuỗi ban đầu: <br/>' . $str . '<br/>';

$str = stripslashes($str);
echo 'Chuỗi sau khi xóa ký tự escape (\): <br/>' . $str . '<hr/>';

#4. explode ($delimiter, $string) : Hàm chuyển chuỗi thành mảng
$str = 'Trung tâm đào tạo lập trình "Unicode"';
echo 'Chuỗi ban đầu: <br/>' . $str . '<br/>';

$arr = explode(' ', $str);
print_r($arr);
echo '<hr/>';

#9.
$str = 'Trung tâm đào tạo lập trình "Unicode"';
echo 'Chuỗi ban đầu: <br/>' . $str . '<br/>';

$str = str_replace('Unicode', 'PHP', $str);
echo $str;