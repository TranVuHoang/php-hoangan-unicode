<?php
$messageArr = [
    1 => "Thêm mới thành công",
    2 => "Sửa thành công",
    3 => "Xóa thành công"
];
function redirect($path) {
    header("Location: " . $path);
    exit;
}

function getMessage($code) {
    global $messageArr;
    if (array_key_exists($code, $messageArr)) {
        return $messageArr[$code];
    }
    return false;
}

function makeChecked($id) {
    if (!empty($_GET['hobbit'])) {
        $hobbit = $_GET['hobbit'];
    } else {
        $hobbit = [];
    }

    if (!empty($_POST['hobbit'] && in_array($id, $_POST['hobbit']))) { // nếu tồn tại mảng hobbit k rỗng và trong mảng hobbit có chứa $id
        $checked = 'checked';
    } elseif (!empty($hobbit) && in_array($id, $hobbit)) {
        $checked = 'checked';
    } else {
        $checked = false;
    }

    return $checked;
}
