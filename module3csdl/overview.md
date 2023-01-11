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
  - thoát khỏi MariaDB: `exit;`
- Đặc điểm của xampp:
  - user: root
  - password: '' (để trống-rỗng)

# 55. Kiến thức SQL - Thao tác với database
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

- Xóa cơ sở dữ liệu:
  - `DROP DATABASE databasename;`
    - vd: `DROP DATABASE php_test1;`
- Chọn cơ sở dữ liệu để sử dụng:
  - `use databasename;`

- Xem các bảng trong cơ sở dữ liệu:
  - `SHOW tables;` : Show ra tất cả các bảng có trong cơ sở dữ liệu   
  - trước khi xem các bảng trong csdl cần phải sử dụng csdl đó mới xem đc bảng

# 56: Kiến Thức Với SQL - Tạo Bảng (Phần 1)
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
  