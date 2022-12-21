<?php

/** Định nghĩa hàm trong PHP
 *
 * #1. Cú pháp định nghĩa hàm(syntax):
 * function tenHam(danh_sach_tham_so) {//code};
 * - tenHam: thường là động từ, viết theo quy tắc camelCase,
 *      - và là tiếng anh: thường bắt đầu bằng(do, make, create, build,...)
 *      - tên hàm không được phép đặt trùng nhau
 * - danh_sach_tham_so: danh sách các biến cách nhau bởi dấu phẩy (,)
 * - bên trong cặp ngoặc nhọn ({..}): là nội dung hàm
 *
 * #2. Cú pháp gọi hàm
 * - tenHam(danh_sach_tham_tri);
 * - hàm có tham số bắt buộc có các quy tắc:
 *      - những tham sô được set giá trị khi khởi tạo hàm, mà tham số đó nằm sau tham số chưa set giá trị
 *          -> khi gọi hàm tham số được set giá trị khi khởi tạo đó có thể k cần set giá trị nữa
 *          - vd: function getTotal($a, $b = 8) {return $a + $b};
 *          -     getTotal(1); // return 1 + 8 // 9
 *      - những tham số ở phía trước tham số bắt buộc(cần khởi tạo giá trị khi gọi hàm) thì ta phải đưa giá trị vào
 *      - Nếu không set giá trị cho tham số đó khi gọi hàm sẽ bị lỗi
 *      -> phải set giá trị cho n kể cả khi định nghĩa hàm đã set giá trị mặc định rồi
 * - vd:
 *          - function getNumber($a = null, $b) {};
 *          - getNumber(9, 10)
 * - Ta có thể gọi hàm trong hàm, không quan trọng thứ tự hàm đó được khởi tạo sau hay trước
 *  - chỉ cần nơi(file) chứa hàm đó đều đc import vào chương trình chính
 */

#1
require_once './27.functions.php'; // import file 27.functions.php
require_once './27.imports_function.php'; // import file 27.imports.function.php

#2. Gọi hàm makeTotal();
$result = makeTotal(9, 10);
echo $result;
echo "<br/>";

/**
 * 2.2 Gọi hàm getMessage();
 */

#Gọi hàm getMessage() trực tiếp
// getMessage();
// echo '<br/>';

#Gọi hàm getMessage - Kiểm tra hàm getMessage() có tồn tại thì mới gọi nó.
if (function_exists('getMessage')) {
    getMessage();
}
echo '<br/>';

#Gọi hàm getNumber()
if (function_exists('getNumber')) {
    getNumber(1997, 'Hoàng');
}
echo '<br/>';

#Gọi hàm buildMenu()
if (function_exists('buildMenu')) {
    buildMenu(false, 'Đây là menu');
}
