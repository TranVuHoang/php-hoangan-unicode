<?php

/**
 * Phương thức gửi và nhận dữ liệu
 * 1. GET
 * - để nhận dữ liệu trên url về
 *
 * 2. POST
 * - Gửi dữ liệu
 *
 * 3. Put
 * - Gửi dữ liệu
 *
 * 4. Delete
 * - Xóa dữ liệu
 *
 * 5. file
 * - upload file
 *
 */

#1 Phương thức get
/**
 * query string: username=hoangtran&email=tranvuhoangjr@gmail.com
 *
 */
echo '<pre>';
print_r($_GET);
echo '</pre>';
$_GET['username'] = "unicode";
echo '<pre>';
print_r($_GET);
echo '</pre>';

// Lấy tham số trên url xuống
# Kiểm tra biến username có tồn tại k
if (isset($_GET['username'])) {
    $userName = $_GET['username'];
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
}

if (isset($_GET['age']) && is_numeric($_GET['age'])) {
    $age = $_GET['age'];
}

echo "Username: $userName <br>";
echo "Email: $email <br>";
echo "Age: $age";
echo "<br>";
