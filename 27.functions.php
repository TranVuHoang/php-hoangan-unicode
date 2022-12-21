<?php
#1.1 Định nghĩa (khai báo) hàm có tham số
function makeTotal($a, $b)
{
    echo "Total: $a + $b = " . ($a + $b);
}

#1.2 Định nghĩa hàm không có tham số
// function getMessage()
// {
//     echo "Đây là thông báo";
// }

/**
 * #1.3 Kiểm tra hàm đã tồn tại chưa: function_exists('tenHam');
 * - if(!function_exists('tenHam')) { hàm};
 * - Kiểm tra xem hàm đã tồn tại chưa(nếu không tồn tại hàm)
 *      => khi đó ta mới định nghĩa hàm
 */
if (!function_exists('getMessage')) {
    function getMessage()
    {
        echo "Đây là thông báo";
        echo '<br/>';
        buildMenu(false, 'Unicode Menu');
        echo '<br/>';
    }
}

#1.3 Định nghĩa hàm getNumber()
if (!function_exists('getNumber')) {
    function getNumber($number, $text = null) {
        if ($text != null) {
            echo "$text : $number";
        } else {
            echo $number;
        }
    }
}

#1.4 Định nghĩa hàm builMenu()

if (!function_exists('buildMenu')) {
    function buildMenu($sub = false, $data) {
        if ($sub) {
            echo "$data có menu con";
        } else {
            echo "$data không có menu con";
        }
    }
}
