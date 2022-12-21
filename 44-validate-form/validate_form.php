<?php

/**
 * Rules:
 * - fullname: Phải nhập, lớn hơn 5 ký tự
 * - email: phải nhập, định dạng Email
 * - age: phải nhập, là số, là số nguyên dương
 */
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = []; // đặt cờ hiệu - khai báo mảng rỗng để chứa lỗi
    echo "<pre>";
    print_r($errors);
    echo "</pre>";

    #Validate fullname phải nhập
    if (empty(trim($_POST['fullname']))) { // hàm empty() kiểm tra fullnam có rỗng hay k
        $errors['fullname']['required'] = 'Họ tên không được để trống.';
    } elseif (strlen(trim($_POST['fullname']) < 5)) {
        $errors['fullname']['min'] = 'Họ tên phải lớn hơn 5 ký tự.';
    }

    #Validate email
    if (empty(trim($_POST['email']))) {
        $errors['email']['required'] = 'Email không được để trống.';
    } else {
        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) { //filter_var() kiểm tra nếu là email -> trả về true
            $errors['email']['invalid'] = 'Email không hợp lệ.';
        }
    }

    #Validate age
    if (empty(trim($_POST['age']))) {
        $errors['age']['required'] = 'Tuổi không được để trống.';
    } else {
        if (!filter_var(trim($_POST['age']), FILTER_VALIDATE_INT, ['option' => ['min' => 1]])) { //filter_var() kiểm tra nếu là age -> trả về true
            $errors['age']['invalid'] = 'Tuổi không hợp lệ.';
        }
    }

    if (empty($errors)) {
        header("Location: .././list.php?message=1");
        exit;
    } else {
        echo "Validate không thành công.";
    }
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}
