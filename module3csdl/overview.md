## 53. TỔNG QUAN VỀ CƠ SỞ DỮ LIỆU
- Module 2: MySQL
  1. Tư duy tổng quan về Cơ Sở Dữ Liệu(Database)
  2. Phân tích Database của 1 website, ứng dụng web
  3. Các câu lệnh trong ngôn ngữ SQL từ cơ bản đến nâng cao
  4. Kỹ thuật đánh chỉ mục (index)
  5. Sử dụng tool để thiết kế database(phpmyadmin,...)

- Website hoạt động như thế nào?
  Frontend -> PHP tiền xử lý -> CSDL -> PHP hậu xử lý -> Frontend
    - PHP tiền xử lý:
      - Frontend request lên server
      - PHP kiểm tra request và nhận dữ liệu từ client này ở dạng nào (GET || POST)
      - sau khi nhận dữ liệu xong sẽ xác thực, lọc dữ liệu
    - Tạo CSDL để chứa dữ liệu và sắp xếp, cấu trúc theo nhiều loại khác nhau, quan hệ nhất định
    - PHP hậu xử lý
      - Lấy dữ liệu từ csdl và xử lý 1 công việc j đó.

- Các loại cơ sở dữ liệu:
  1. Cơ sở dữ liệu quan hệ(Oracle, MySQL, SQL server, PostgSQL)
    - Oracle - java, MySQL - php, SQL Server - C#
  2. Cơ sở dữ liệu hướng tài liệu(MongoDB, Couchbase)
  3. Cơ sở dữ liệu dạng khóa - giá trị (Redis, Memcached)
  4. Cơ sở dữ liệu phi quan hệ (Cassandra, HBase)
  5. Cơ sở dữ liệu dạng bộ máy tìm kiếm(Elasticsearch)

- SQL : Ngôn ngữ truy vấn: Không thay đổi
- MySQL, MS SERVER: phần mềm, có upadte(thay đổi) thường xuyên

## 54. Phần mềm - công cụ cần chuẩn bị
- Cài đặt MySQL SERVER 
- Khởi động mysql server
- phpmyadmin, command Lind(CMD, Terminal, IDE)
-> Truy cập phpmyadmin: `http://localhost/phpmyadmin`

- Trong folder xampp -> mysql -> bin -> mysql.exe và kéo vào trong cmd
  - `D:\xampp\mysql\bin\mysql.exe -u root -p` -> đăng nhập vào MariaDB và mysql
    <pre>
      C:\Users\DELL>D:\xampp\mysql\bin\mysql.exe -u root -p
      Enter password:
      Welcome to the MariaDB monitor.  Commands end with ; or \g.
      Your MariaDB connection id is 26
      Server version: 10.4.11-MariaDB mariadb.org binary distribution

      Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

      Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.
    </pre>
  - thoát khỏi MariaDB: `exit;`
- Đặc điểm của xampp:
  - user: root
  - password: '' (để trống-rỗng)

## 55. Kiến thức SQL - Thao tác với database
- KIẾN THỨC CSDL MYSQL
- Môi trường học tập
Cách 1: Sử dụng CMD có sẵn trên máy, hoặc qua các phần mềm terminal tích hợp sẵn trong IDE(vsCode, phpStorm,...)

Cách 2: Sử dụng công cụ CSDL: xampp, wampp, Navicat, ...

- Comment trong SQL:
  - -- Nội dung comment
  - ctrl + /

- Tạo cơ sở dữ liệu mới:
  - `CREATE DATABASE databasename;`
    - vd: `CREATE DATABASE php_online;`

- Hiển thị databasse trên màn hình CMD:
  - `SHOW DATABASES;`
  - Kết quả:
  <pre>
    MariaDB [(none)]> SHow databases;
    +--------------------+
    | Database           |
    +--------------------+
    | data               |
    | demo               |
    | demo_crud_php      |
    | demo_wp            |
    | homestead          |
    | information_schema |
    | ismart             |
    | ismart.com         |
    | laravelpro         |
    | mysql              |
    | performance_schema |
    | php49_project      |
    | php_dienthoai1     |
    | php_hocphp         |
    | php_ltw1           |
    | php_online         |
    | php_online_module3 |
    | php_shop_db        |
    | php_shopping       |
    | php_themsuaxoa     |
    | php_vietpro_shop   |
    | php_webdienthoai   |
    | phplessons         |
    | phpmyadmin         |
    | qlsv               |
    | sell_phones        |
    | shop_db            |
    | shopbanhang        |
    | shopbanhang-1      |
    | shopping_cart      |
    | themewoo           |
    | thuc_hanh_mysql    |
    | training_php       |
    | training_php8      |
    | training_php9      |
    | trainning          |
    | unitop             |
    | unitop_backup      |
    +--------------------+
    38 rows in set (0.002 sec)
  </pre>

- Xóa cơ sở dữ liệu:
  - `DROP DATABASE databasename;`
    - vd: `DROP DATABASE php_test1;`
- Chọn cơ sở dữ liệu để sử dụng:
  - `use databasename;`

- Xem các bảng trong cơ sở dữ liệu:
  - `SHOW tables;` : Show ra tất cả các bảng có trong cơ sở dữ liệu   
  - trước khi xem các bảng trong csdl cần phải sử dụng csdl đó mới xem đc bảng

## 56: Kiến Thức Với SQL - Tạo Bảng (Phần 1)
- Tạo bảng `users` trong csdl `php_online_module3`
  - `CREATE TABLE users (id int(5), email varchar(100), fullname varchar(50), create_at datetime);`

- Show ra cấu trúc bảng :
  - `DESCRIBE tablename;`
    - vd:    `DESCRIBE users;`: show ra cấu trúc bảng users

    - Kết quả:
      <pre>
      MariaDB [php_online_module3]> DESCRIBE users;
      +-----------+--------------+------+-----+---------+-------+
      | Field     | Type         | Null | Key | Default | Extra |
      +-----------+--------------+------+-----+---------+-------+
      | id        | int(5)       | YES  |     | NULL    |       |
      | email     | varchar(100) | YES  |     | NULL    |       |
      | fullname  | varchar(50)  | YES  |     | NULL    |       |
      | create_at | datetime     | YES  |     | NULL    |       |
      +-----------+--------------+------+-----+---------+-------+
      </pre>

- Kiểu dữ liệu hay dùng trong SQL
  - char(size): chuỗi có độ dài cố định, mặc định size là 1, size tù 0-255
  - varchar(size): Chuỗi có độ dài biến đổi: Size là độ dài tối đa, từ 0-65535
  - text: Chuỗi có độ dài tối đa là: 65,535 byle
  - mediumtext: Chuỗi có độ dài tối đa là: 16,777,215 ký tự
  - longtext: Chuỗi có độ dài tối đa là: 4,294,967,295 ký tự
  - tinyint: Số nguyên có giá trị từ -128 đến 127
  - smallint: Số nguyên có giá trị từ: -32768 đến 32767
  - mediumint: Số nguyên có giá trị từ: -8388608 đến 8388607

  - int: Số nguyên có giá trị từ: -214783648 đến 214783647
  - bigint: Số nguyên có giá trị từ: ...
  - float: Số thực có giá trị từ: ...
  - double:
  - datetime: Kiểu ngày giờ: YYYY-MM-DD H:i:s
  - date: Kiểu ngày: YYYY-MM-DD
  - Timestamp: kiểu ngày giờ và lưu ở dạng giờ quốc tế UTC (YYYY-MM-DD H:i:s UTC)
    - khi truy xuất sẽ tự động đổi sang múi giờ UTC

## 57: Kiến Thức Với SQL - Tạo Bảng (Phần 2) 
- Xóa bảng:
  - `DROP table table_name;`
- Sửa bảng:
  - Thêm cột:
    - ``ALTER TABLE `table_name` ADD `column_name` datatype;``
  - Xóa cột:
    - ``ALTER TABLE `table_name` DROP `column_name`;``
  - Sửa cột:
    - ``ALTER TABLE `table_name` MODIFY COLUMN `column_name` datatype;``

- Ví dụ:
  - Xóa bảng:
    - `DROP table table_name;`
    - vd: 
      - `DROP table users;`
      - kq: `Query OK, 0 rows affected (0.364 sec)`;

  - Thêm cột `password` vào bảng `users`:
    - `` ALTER TABLE `users` ADD `password` varchar(50);``
    - kq:
      <pre>
        Query OK, 0 rows affected (0.169 sec)
        Records: 0  Duplicates: 0  Warnings: 0
      </pre>

  - Show cấu trúc bảng `users` sau khi thêm cột `password`:
    - `DESCRIBE users;`
    - kq:
      <pre>
        MariaDB [php_online_module3]> DESCRIBE users;
        +-----------+--------------+------+-----+---------+-------+
        | Field     | Type         | Null | Key | Default | Extra |
        +-----------+--------------+------+-----+---------+-------+
        | id        | int(5)       | YES  |     | NULL    |       |
        | email     | varchar(100) | YES  |     | NULL    |       |
        | fullname  | varchar(50)  | YES  |     | NULL    |       |
        | create_at | datetime     | YES  |     | NULL    |       |
        | password  | varchar(50)  | YES  |     | NULL    |       |
        +-----------+--------------+------+-----+---------+-------+
        5 rows in set (0.049 sec)
      </pre>
  - Xóa cột `password` khỏi bảng `users`:
    - ``ALTER TABLE `users` DROP COLUMN `password`; ``
    - KQ:
      <pre>
        Query OK, 0 rows affected (0.421 sec)
        Records: 0  Duplicates: 0  Warnings: 0
      </pre>
  - Show cấu trúc bảng `users` sau khi xóa cột `password`:
    - `DESCRIBE users;`
    - kq:
      <pre>
        MariaDB [php_online_module3]> DESCRIBE users;
        +-----------+--------------+------+-----+---------+-------+
        | Field     | Type         | Null | Key | Default | Extra |
        +-----------+--------------+------+-----+---------+-------+
        | id        | int(5)       | YES  |     | NULL    |       |
        | email     | varchar(100) | YES  |     | NULL    |       |
        | fullname  | varchar(50)  | YES  |     | NULL    |       |
        | create_at | datetime     | YES  |     | NULL    |       |
        +-----------+--------------+------+-----+---------+-------+
        4 rows in set (0.013 sec)
      </pre>
  - Sửa kiểu của cột `fullname` trong bảng `users`:
    - ``MariaDB [php_online_module3]> ALTER TABLE `users` MODIFY COLUMN `fullname` text;``
      <pre>
        Query OK, 0 rows affected (1.717 sec)
        Records: 0  Duplicates: 0  Warnings: 0
      </pre>
    - `DESCRIBE users;`
      <pre>
        +-----------+--------------+------+-----+---------+-------+
        | Field     | Type         | Null | Key | Default | Extra |
        +-----------+--------------+------+-----+---------+-------+
        | id        | int(5)       | YES  |     | NULL    |       |
        | email     | varchar(100) | YES  |     | NULL    |       |
        | fullname  | text         | YES  |     | NULL    |       |
        | create_at | datetime     | YES  |     | NULL    |       |
        +-----------+--------------+------+-----+---------+-------+
        4 rows in set (0.029 sec)
      </pre>

## 58. Kiến Thức Với SQL - Thêm Sửa Xóa Dữ Liệu
- Thêm dữ liệu:
  - ``
      INSERT INTO `table_name` (`column1_name`, `column2_name`, `column3_name`, ...) 
      VALUES (value1, value2, value3, ...);
    ``

- Sửa dữ liệu:
  - `` 
      UPDATE `table_name` 
      SET `column_name1` = value1,`column_name2` = value2, `column_name3` = value3, ...  
      WHERE conditon;
    ``

- Xóa dữ liệu:
  - ``
    DELETE FROM `table_name`
    WHERE condition;
    ``
- Ví dụ:
  - Thêm dữ liệu:
    <pre>
    INSERT INTO `users` (`id`, `email`, `fullname`, `create_at`, `update_at`) 
    VALUES ('2', 'admin@admin.com', 'Admin', '2023-01-11 13:54:09', '2023-01-12 14:20:03');
    </pre>
  - kq:
    <pre>
    MariaDB [php_online_module3]> INSERT INTO `users` (`id`, `email`, `fullname`, `create_at`, `update_at`)
    -> VALUES ('2', 'admin@admin.com', 'Admin', '2023-01-11 13:54:09', '2023-01-12 14:20:03');
    Query OK, 1 row affected (0.144 sec)
    </pre>s
    <pre>
    MariaDB [php_online_module3]> SELECT * FROM `users`;
    +------+-------------------------+------------+---------------------+---------------------+
    | id   | email                   | fullname   | create_at           | update_at           |
    +------+-------------------------+------------+---------------------+---------------------+
    |    1 | tranvuhoangjr@gmail.com | Hoang Tran | 2023-01-11 13:54:03 | 2023-01-12 13:54:03 |
    |    2 | admin@admin.com         | Admin      | 2023-01-11 13:54:09 | 2023-01-12 14:20:03 |
    +------+-------------------------+------------+---------------------+---------------------+
    2 rows in set (0.000 sec)
    </pre>
    <pre>
    MariaDB [php_online_module3]> INSERT INTO `users` (`id`, `email`, `fullname`, `create_at`)
    -> VALUES (3, "user3@gmail.com", "User3", NOW());
    Query OK, 1 row affected (0.198 sec)
    </pre>
    <pre>
    MariaDB [php_online_module3]> SELECT * FROM `users`;
    +------+-------------------------+------------+---------------------+---------------------+
    | id   | email                   | fullname   | create_at           | update_at           |
    +------+-------------------------+------------+---------------------+---------------------+
    |    1 | tranvuhoangjr@gmail.com | Hoang Tran | 2023-01-11 13:54:03 | 2023-01-12 13:54:03 |
    |    2 | admin@admin.com         | Admin      | 2023-01-11 13:54:09 | 2023-01-12 14:20:03 |
    |    3 | user3@gmail.com         | User3      | 2023-01-11 14:25:55 | NULL                |
    +------+-------------------------+------------+---------------------+---------------------+
    3 rows in set (0.000 sec)
    </pre>
  - Sửa dữ liệu:
    ``
