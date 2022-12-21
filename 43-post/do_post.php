<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// #Kiểm tra biến $_POST có rỗng k
// if (!empty($_POST)) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     echo "Username: $username <br>";
//     echo "Password: $password <br>";
// }

#Kiểm tra biến $_POST['submit'] có tồn tại k
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Username: $username <br>";
    echo "Password: $password <br>";
} else {
    echo "Not allow method";
}
