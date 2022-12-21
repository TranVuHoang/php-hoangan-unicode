<?php

/**
 * #3. Kiểm tra 1 số có phải số nguyên tố không và hiển thị kq
 * #4. In bản cửu chương
 */

/**
 * #3. Kiểm tra 1 số có phải số nguyên tố không và hiển thị kq
 *
 * Input: số nguyên tố n
 * Output: Thông báo số n có phải số nguyên tố hay không
 *
 * - Số nguyên tố:
 *      - lớn hơn 1
 *      - và chỉ chia hết cho 1 và chính nó
 *
 * - Giải thuật:
 *      - Kiểm tra n có > 1 hay k
 *      - Nếu n > 1:
 *          - dùng vòng lặp chạy từ 2 -> n
 *          - kiểm tra trong phạm vi 2 -> n có chia có chia hết cho số nào k?
 *          - Nếu có chia hết -> Kết luận không phải số nguyên tố
 *          - Nếu không chia hết -> là số nguyên tố
 *      - Nếu n <= 1: -> thông báo không phải số nguyên tố
 */

#3. Kiểm tra 1 số có phải số nguyên tố không và hiển thị kq
$n = 7; // số cần kiểm tra

if ($n < 0) {
    echo 'Không hợp lệ';
} elseif ($n > 1) {
    $check = true; // gắn cờ kiểm kiểm tra số nguyên tố (Giả định n là số nguyên)

    // Kiểm tra trong đoạn từ 2 -> n có chia hết có số nào k
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $check = false;
        }
    }

    if ($check) {
        echo "$n là số nguyên tố <br/>";
    } else {
        echo "$n không phải số nguyên tố <br/>";
    }
} else {
    echo "$n không phải số nguyên tố <br/>";
}
?>
<!-- 4. In bảng cửu chương -->
<table border="1" cellspacing="0" cellpadding="10">
    <div>
        <h2>Dựng HTML bảng cửu chương</h2>
    </div>
    <tr>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
    </tr>
    <tr>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
        <td>
            <!-- {1 x $ = $ </br>}*10+ tab -->
            1 x 1 = 1 </br>
            1 x 2 = 2 </br>
            1 x 3 = 3 </br>
            1 x 4 = 4 </br>
            1 x 5 = 5 </br>
            1 x 6 = 6 </br>
            1 x 7 = 7 </br>
            1 x 8 = 8 </br>
            1 x 9 = 9 </br>
            1 x 10 = 10 </br>
        </td>
    </tr>
</table>

<!-- Đổ PHP lên bảng HTML -->
<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F1- Cách 1</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
            ?>
                <td><?php echo "$col x 1 = $col"; ?></td>
            <?php
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F1- Cách 2</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
                echo "<td>";
                echo "$col x 1 = $col";
                echo "</td>";
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F2 Cách 1</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
            ?>
                <td><?php echo "$col x 1 = $col"; ?></td>
            <?php
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F2 Cách 2</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
                echo "<td>";
                echo "$col x 1 = $col";
                echo "</td>";
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F3 - Cách 1</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
                echo "<td>";
                for ($row = 1; $row <= 10; $row++) {
                    echo "$col x $row = " . $col * $row . "<br/>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F3 - Cách 2</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
            ?>
                <td>
                    <?php
                    for ($row = 1; $row <= 10; $row++) {
                        echo "$col x $row = " . $col * $row . "<br/>";
                    ?>
                    <?php
                    }
                    ?>
                </td>
            <?php
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F4</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 10; $col++) {
                echo "<td>";
                for ($row = 1; $row <= 10; $row++) {
                    echo "$col x $row = " . $col * $row . "<br/>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F5 - Cách 1</h2>
    <tbody>
        <tr>
            <?php
            for ($col = 1; $col <= 5; $col++) {
                echo "<td>";
                for ($row = 1; $row <= 10; $row++) {
                    echo "$col x $row = " . $col * $row . "<br/>";
                }
                echo "</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($col = 6; $col <= 10; $col++) {
                echo "<td>";
                for ($row = 1; $row <= 10; $row++) {
                    echo "$col x $row = " . $col * $row . "<br/>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </tbody>
</table>

<!-- Cách chuẩn nhất đúng cả ctrl shift I và ctrl U -->
<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F5 - Cách 2</h2>
    <tbody>
        <?php

        for ($col = 1; $col <= 10; $col++) {
            if ($col == 1 || $col == 6) {
                echo '<tr>';
            }
            echo "<td>";

            for ($row = 1; $row <= 10; $row++) {
                echo "$col x $row = " . $col * $row . "<br/>";
            }
            echo "</td>";

            if ($col == 5 || $col == 10) {
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>

<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F5 - Cách 3</h2>
    <tbody>
        <?php
        for ($col = 1; $col <= 10; $col++) {
            echo "<td>";

            for ($row = 1; $row <= 10; $row++) {
                echo "$col x $row = " . $col * $row . "<br/>";
            }
            echo "</td>";
            if ($col % 5 == 0) {
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>

<!-- debug: kiểm tra ctrl U xem code HTML có đúng k? -->
<table border="1" cellspacing="0" cellpadding="10">
    <h2>Đổ PHP lên bảng HTML F5 - Cách 2</h2>
    <tbody>
        <tr>
            <td>1 x 1 = 1<br />1 x 2 = 2<br />1 x 3 = 3<br />1 x 4 = 4<br />1 x 5 = 5<br />1 x 6 = 6<br />1 x 7 = 7<br />1 x 8 = 8<br />1 x 9 = 9<br />1 x 10 = 10<br /></td>
            <td>2 x 1 = 2<br />2 x 2 = 4<br />2 x 3 = 6<br />2 x 4 = 8<br />2 x 5 = 10<br />2 x 6 = 12<br />2 x 7 = 14<br />2 x 8 = 16<br />2 x 9 = 18<br />2 x 10 = 20<br /></td>
            <td>3 x 1 = 3<br />3 x 2 = 6<br />3 x 3 = 9<br />3 x 4 = 12<br />3 x 5 = 15<br />3 x 6 = 18<br />3 x 7 = 21<br />3 x 8 = 24<br />3 x 9 = 27<br />3 x 10 = 30<br /></td>
            <td>4 x 1 = 4<br />4 x 2 = 8<br />4 x 3 = 12<br />4 x 4 = 16<br />4 x 5 = 20<br />4 x 6 = 24<br />4 x 7 = 28<br />4 x 8 = 32<br />4 x 9 = 36<br />4 x 10 = 40<br /></td>
            <td>5 x 1 = 5<br />5 x 2 = 10<br />5 x 3 = 15<br />5 x 4 = 20<br />5 x 5 = 25<br />5 x 6 = 30<br />5 x 7 = 35<br />5 x 8 = 40<br />5 x 9 = 45<br />5 x 10 = 50<br /></td>
        </tr>
        <tr>
            <td>6 x 1 = 6<br />6 x 2 = 12<br />6 x 3 = 18<br />6 x 4 = 24<br />6 x 5 = 30<br />6 x 6 = 36<br />6 x 7 = 42<br />6 x 8 = 48<br />6 x 9 = 54<br />6 x 10 = 60<br /></td>
            <td>7 x 1 = 7<br />7 x 2 = 14<br />7 x 3 = 21<br />7 x 4 = 28<br />7 x 5 = 35<br />7 x 6 = 42<br />7 x 7 = 49<br />7 x 8 = 56<br />7 x 9 = 63<br />7 x 10 = 70<br /></td>
            <td>8 x 1 = 8<br />8 x 2 = 16<br />8 x 3 = 24<br />8 x 4 = 32<br />8 x 5 = 40<br />8 x 6 = 48<br />8 x 7 = 56<br />8 x 8 = 64<br />8 x 9 = 72<br />8 x 10 = 80<br /></td>
            <td>9 x 1 = 9<br />9 x 2 = 18<br />9 x 3 = 27<br />9 x 4 = 36<br />9 x 5 = 45<br />9 x 6 = 54<br />9 x 7 = 63<br />9 x 8 = 72<br />9 x 9 = 81<br />9 x 10 = 90<br /></td>
            <td>10 x 1 = 10<br />10 x 2 = 20<br />10 x 3 = 30<br />10 x 4 = 40<br />10 x 5 = 50<br />10 x 6 = 60<br />10 x 7 = 70<br />10 x 8 = 80<br />10 x 9 = 90<br />10 x 10 = 100<br /></td>
        </tr>
    </tbody>
</table>