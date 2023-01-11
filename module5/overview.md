## Module 5:

# 87 Tổng quan về thực hành quản lý user

- Thực hành làm module quản lý người dùng (users) bao gồm các chức năng:

Nhóm 1: Xác thực truy cập

- Đăng nhập
- Đăng ký
- Đăng xuất
- Quên mật khẩu
- Kích hoạt tài khoản

Nhóm 2: Quản lý người dùng

- Xác thực người dùng đăng nhập
- Thêm người dùng
- Sửa người dùng
- Xóa người dùng
- Hiển thị danh sách người dùng
- Phân trang
- Tìm kiếm, lọc

# 88 Phân tích thiết kế database

- Bảng: `user`
  - Gồm các trường:
    - id: int primary key
    - email: varchar (100)
    - fullname: varchar (50)
    - phone: varchar (20)
    - password: varchar (50)
    - forgotToken: varchar (50)
    - activeToken: varchar (50)
    - status tinyint
    - createAt: datetime
    - updateAt: datetime
- Bảng login_token (đăng xuất nhiều thiết bị)
  - id int primary
  - userId int foreign key đến users (id)
    - liên kết khóa ngoại đến id của bảng `users`
    - trong `cấu trúc` bảng `login_token` nhấn vào `hiển thị quan hệ`
    -
  - token varchar(50)
  - createAt: datetime

# 89 Xây dựng cấu trúc thư mục - files

- user_manager

  - includes (folder này sẽ chứa các file function)
    - `functions.php`: chứa các hàm chung
    - `connect.php`: file để kết nối csdl
    - `database.php`: file chứa các hàm xử lý database
    - `session.php`: file chứa các hàm liên quan đến thao tác session
    - `index.html`: file này để trống và có chức năng để tránh người dùng truy cập trực tiếp vào includes thông qua url
  - modules: quản lý các chức năng của hệ thống
    - auth: folder xử lý các vấn đề liên quan đến xác thực
      - `login.php`: file chứa chức năng login
      - `register.php`: file chứa chức năng đăng ký
      - `forgot.php`: File này chứa chức năng quên mật khẩu
      - `reset.php` : File này chứa chức năng đặt lại mật khẩu
    - users
      - `list.php`: file này để hiện thị danh sách người dùng
      - `add.php`: file này dùng để thêm người dùng
      - `edit.php`: file này dùng để sửa người dùng
  - templates: chứa các folder: image, css, js
    - css
    - fonts
    - images
    - js
    - laygout: chứa các layout của trang
        - `header.php`
        - `footer.php`

    - images
    - CSS
    - js
    - fonts

  - `index.php`

# 90 Code chức năng điều hướng module (routes) phần 1

# 91 Code chức năng điều hướng module (routes) phần 2

