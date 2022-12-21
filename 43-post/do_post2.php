<?php
#Kiểm tra biến $_POST['login'] có rỗng k
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    echo "Username: $username <br>";
    echo "Email: $email <br>";
} else {
    echo "Not allow method";
}
