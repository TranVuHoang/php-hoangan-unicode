<?php

/**
 * Hàm return và hàm không return
 * Biến cục bộ, biến toàn cục, biến tĩnh
 * Tham biến, tham trị, tham số, tham chiếu
 *
 * 1. Hàm return và hàm không return
 * - Hàm không có từ khóa return -> hàm không return
 * - Hàm có từ khóa return khi kết thúc hàm -> hàm return (hàm có giá trị trả về)
 * Nếu từ khóa return được gọi ra thì các câu lệnh sau return sẽ không chạy
 *
 * 2. Biến cục bộ, biến toàn cục
 * - Biến cục bộ là biến chỉ được sử dụng trong phạm vi hàm và không được sử dụng ở phạm vi ngoài hàm
 *
 * - Biến toàn cục là biến được sử dụng bất kỳ đâu trong chương trình
 *  - khai báo biến toàn cục ở ngoài hàm
 *  - Muốn sử dụng biến toàn cục bên trong hàm -> cần khai báo: global $tenBienToanCuc;
 *
 * - Biến tĩnh: không thay đổi giá trị khi gọi hàm
 *
 * 3. Tham số, tham trị, tham chiếu
 * - Tham số: được gọi khi ta định nghĩa hàm
 *
 * - Tham biến: được gọi khi định nghĩa hàm và làm thay đổi giá trị của biến truyền vào
 *
 * - Tham trị: được sử dụng khi ta gọi hàm
 *
 * - Tham chiếu: $b được khai báo tham chiếu đến $a -> $b thay đổi thì $a thay đổi theo
 *  - $a = 1;
 *  - $b = &$a;
 *  - $b = 10;
 */

# Biến toàn cục
$data = 1;
$msg = 1000;

# Hàm return
function makeTotal($a, $b)
{
    // $toTal = $a + $b;
    // echo $toTal;
    return $a + $b;
}

function setGlobalVariable()
{
    global $data;
    echo $data;
    echo '<br/>';
}

function setGlobalMsg($text)
{
    global $msg;
    $msg = $text;
    echo '<br/>';
}
echo $msg;

setGlobalMsg('Unicode');
echo $msg . '<br/>';

setGlobalVariable();

$result = makeTotal(1, 2);
$result++;
echo $result;
echo '<br/>';

#Định nghĩa hàm getMessage()
if (!function_exists('getMessage')) {
    function getMessage($msg = null)
    {
        if ($msg == null) { // $msg == null
            return; // thoát chương trình// return null
        } else {
            return $msg; // trả về giá trị $msg
        }
    }
}

#Gọi hàm getMessage
$result = getMessage();
echo $result;
var_dump($result);
echo '<br>';

function handleCount()
{
    static $number = 0;
    $number++;
    return $number;
}

echo handleCount();
echo '<br>';
echo handleCount();

# Tham số là 1 tham biến &$tenBien
function setMessage(&$msg)
{
    $msg .= '1';
    return $msg;
}
echo '<br/>';

$message = 'Unicode';
echo setMessage($message);
echo '<br/>';
echo $message;
echo '<br/>';

#Tham chiếu
$a = 1;
$b = &$a; // $b được khai báo tham chiếu đến $a -> $b thay đổi thì $a thay đổi theo
$b = 10;

echo "a = $a";
echo '<br/>';
echo "b = $b";
echo '<br/>';

function &hello()
{
    static $hello = 'Unicode';
    return $hello;
}
$h = &hello();
echo "$h <br/>";

$h = 'Học PHP';
echo "$h <br/>";

echo hello();
