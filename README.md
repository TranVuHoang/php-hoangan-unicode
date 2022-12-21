### LỘ TRÌNH HỌC LẬP TRÌNH PHP & MYSQL

- PHP cơ bản -> Lập trình hướng đối tượng OOP vs PHP
  -> thiết kế CSDL -> Xấy dựng các chức năng nhỏ(CRUD, login, logout,...) dùng PHP + Mysql
  -> Rewrite URL()
  => Thực hành và xây dựng 1 website hoàn chỉnh sử dụng PHP & Mysql(sản phầm demo)
  -> học về các mô hình trong lập trình với CSDL: MVC, HMVC(cần học rất kỹ phần này)
  -> PHP Framework(Laravel)
  -> CMS
  -> công cụ quản lý mã nguồn: GIT, SVN
  -> Công cụ quản lý Trello
  -> Tên miền, hosting, Server/VPS(ubuntu,Centos)

# Kiến thức nền tảng là quan trọng

- PHP (lội trình từ cơ bản - nên tảng -> nâng cao)
  -1. webstie: giới thiệu, bán hàng, TMĐT
  -2. PHP framework: Laravel, Codeigniter, Yii,...
  -3. CMS: wordpress, magento,
  -4.web app: CRM, ERP, Quản lý bán hàng, quản lý đơn hàng
  -5. Tool: auto post social, auto view, email marketing
- Kiến thức lý thyết -> thực hành -> lý thuyết -> thực hành => sản phẩm
  -> chịu khó gõ code

## 3. Cài đặt môi trường, công cụ lập trình PHP

1. Cài đặt công cụ code PHP
   - vs.code
   - sublime text
   - php storme
2. Cài đặt môi trường chạy PHP
   - xampp
   - wamps
   - ampps
     -> bản đóng gói
     -> webserver(apche, Nginx, IIS)
   - cài đặt PHP: `https://www.php.net/downloads.php`
   - cài đặt Mysql: `https://www.mysql.com/downloads/`

## 4. Kiểm tra thông tin trong PHP

- nếu file .php mà chỉ có `<?php` thì hiểu là chỉ có code php
- muốn chèn html phải thêm `?>`
- `phpinfo();`
  - Hàm kiểm tra phiên bản PHP hiện tại

## 5. Biến, comment, Debug trong PHP

- Biến là nơi để lưu trữ, biến có thể thay đổi được giá trị
- 1. Đặt tên biến PHP
  - syntax: `$variableName`
  - Note:
    - Tên biến bắt đầu bằng chữ cái hoặc dấu gạch dưới(\_)
    - PHP phân biệt chữ hoa chữ thường
    - PHP k cần khai báo kiểu dữ liệu
    - Nên đặt tên biến theo quy tắc camelCase(lạc đà) ex: `$listUsers`
- 2. Gán biến, xuất dữ liệu trong PHP
  - syntax:
    - `$variable = value;`
    - vd:
      `$fullName = "Hoàng Trần";`
      `$email = "tranvuhoangjr@gmail.com";`
  - In dữ liệu:
    - echo <tenBien/tenHam/chuoi/so>;
    - vd:
      `echo $fullName";`
      `echo "Hello World";`
      `echo 10;`
  - Note:
    `Biến sẽ nhận giá trị gán sau cùng`

## 6. Nối biến trong PHP

- syntax:
  - `$bien1 . $bien2;`
  - vd:
    - `$firstName = "Hoàng";`
    - `$lastName = "Trần";`
    - `echo $firstName . " " . $lastName;` <-> Hoàng Trần

## 7. Hằng trong PHP

- syntax:
  - Cách 1
    - `define('_TÊN_HẰNG', 'giaTri');`
    - vd: `define ("_PI", 3.14);`
  - Cách 2
    `const _PI = 3.14;`
- Sử dụng:
  - `ten_hằng`;
- Quy tắc đặt tên hằng:
  - viết theo quy tắc underscore_uppercase
  - bắt đầu bằng chữa cái hoặc gạch dưới
  - phân biệt chữ hoa, chữ thường
  - vd: `_WEB_HOT_ROOT;`
- Giá trị của hăng không thay đổi(biến thì có thể thay đổi giá trị)

## 8. Các kiểu dữ liệu trong PHP

1. Kiểu `int`(số nguyên)
2. kiểu `float`(số thực)
3. Kiểu `string`(chuỗi)
4. Kiểu `array`(mảng)
5. Kiểu boolean
6. Kiểu null
7. Kiểu object(đối tượng)
8. Kiểu Resource

- 1. Kiểu số nguyên:
  - khai báo biến kiểu số nguyên: `$tenBien = so_nguyen;`
  - Ép kiểu: `(int) $tenBien;`
  - Kiểm tra số nguyên: `is_int();` hoặc `is_integer();`
- 2. Kiểu dữ liệu boolean
  - syntax:
    - `$variableName = true/false;`
  - Ép kiểu:
    - Cách 1:
      - `(boole) $variableName;`
    - Cách 2:
      - `(boolean) $variableName;`
  - falsy:
    - số 0, null, " ", false
    - còn lại là truthy

# 9 Biểu thức và toán tử trong PHP

- Biểu thức: Tập hợp các toán tử và toán hạng
  - Toán hạng: Các biến hay \*các giá trị được thực hiện
  - Toán tử: Các phép toán: cộng, trừ, nhân, chia, so sánh, lấy dư,...
- Toán tử gán: =, +=, -=, \*=, /=, .=
- Toán tử số học: +, -, \*, /
- Toán tử so sánh: >, <, >=, <=, ==, ===, !=, !==
- Toán tử luận lý: &&, ||, !(Độ ưu tiên: NOT -> AND -> OR)

# 11 Câu lệnh điều kiện if-else

- syntax:
  - if(điều kiện) {
    // Các câu lệnh;
    } else {
    // code;
    }

# 12 Câu lệnh switch case

- giá trị case chỉ chấp nhận số nguyên, só thực, string, boolean, null
- quan hệ so sánh trong switch case luôn là so sánh bằng (==)
- switch case được sử dụng khi câu điều có nhiều nhánh tuy nhiên kém linh hoạt hơn if else
- switch case có thể kết hợp vs if else để tăng độ linh hoạt
- switch case có thể lồng vs switch case con

# 13 Vòng lặp trong PHP

- Vòng lặp là đoạn mã lệnh trong đó chương trình được lặp đi lặp lại nhiều lần cho đến khi thỏa mãn điều kiện nào đó
- Trong PHP có 4 loại vòng lặp:
  - vòng lặp for: Lặp với số lần xác định
  - vòng lặp while và do while: lặp với số lần không xác định
  - vòng lặp foreach: vòng lặp để lặp các phần tử trong mảng
    -#1. vòng lặp for:
  - syntax: for ($tenBien = value; dieu_kien_dung; bieu_thuc_tằng) {
    // câu lệnh
    }

# 23 Xử lý chuỗi trong PHP
- Chuỗi là j?
  - Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
/**
 * Nguyên tắc khi xử lý chuỗi
 * - Nếu chuỗi đặt trong dấu nháy kép("") thì các ký tự là dấu nháy kép "" bên trong chuỗi
 *    phải có ký tự escape (\) phía trước
 *  - vd: echo "Trung tâm đào tạp \"Unitop\" - Đào tạo lập trình PHP";
 * - Nếu chuỗi đặt trong cặp nháy kép mà có biến thì không cần nối chuỗi
 *  - vd: echo "sum = $sum";
 * -
 */
# 31 Mảng trong PHP

- Mảng là kiểu dữ liệu đặc biệt, trong đó chứa nhiều giá trị
- Thêm phần tử vào mảng:
  - Thêm phần tử có key: `$tenBien[key] = value;`
  - Thêm phần tử không key: `$tenBien[] = value;`
  - Dùng thông qua hàm array_push: `array_push($tenBien, value1, value2);`
