<?php
require_once './functions.php'
?>
<h3>Danh sách khách hàng</h3>

<?php
if (!empty($_GET['message'])) {
    $messageCode = $_GET['message'];
    echo getMessage($messageCode);
}
