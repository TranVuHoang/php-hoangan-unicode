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
      MariaDB [php_online_module3]> DESCRIBE users;
      +-----------+--------------+------+-----+---------+-------+
      | Field     | Type         | Null | Key | Default | Extra |
      +-----------+--------------+------+-----+---------+-------+
      | id        | int(5)       | YES  |     | NULL    |       |
      | email     | varchar(100) | YES  |     | NULL    |       |
      | fullname  | varchar(50)  | YES  |     | NULL    |       |
      | create_at | datetime     | YES  |     | NULL    |       |
      +-----------+--------------+------+-----+---------+-------+

- Kiểu dữ liệu hay dùng trong SQL
  - char(size): chuỗi có độ dài cố định, mặc định size là 1