<!-- Dựng HTML ban đầu -->
<style>
    .boxed {
        width: 60px;
        height: 60px;
    }

    .black {
        background-color: black;
    }

    .white {
        background-color: white;
    }
</style>

<!-- Dựng HTML ban đầu  -->
<h2>Dựng HTML ban đầu </h2>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td class="boxed white"></td>
            <td class="boxed black"></td>
            <td class="boxed white"></td>
            <td class="boxed black"></td>
            <td class="boxed white"></td>
            <td class="boxed black"></td>
            <td class="boxed white"></td>
            <td class="boxed black"></td>
        </tr>
    </tbody>
</table>

<!-- Đổ dữ liệu vòng lặp PHP lên HTML -->
<h2>Đổ dữ liệu vòng lặp PHP lên HTML F1(xuất hàng)</h2>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
        <?php
        // vòng lặp lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo '<td class="boxed black"></td>';
            echo '<td class="boxed white"></td>';
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<!-- Đổ dữ liệu vòng lặp PHP lên HTML -->
<h2>Đổ dữ liệu vòng lặp PHP lên HTML F1(xuất hàng + cột)</h2>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
        <?php
        // vòng lặp - lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";

            // vòng lặp - lặp các cột
            for ($col = 1; $col <= 8; $col++) {
                if ($col % 2 != 0) {
                    echo '<td class="boxed white"></td>';
                } else {
                    echo '<td class="boxed black"></td>';
                }
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<!-- Đổ dữ liệu vòng lặp PHP lên HTML -->
<h2>Đổ dữ liệu vòng lặp PHP lên HTML F1(đổi đúng màu so le bàn cờ)</h2>
<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
        <?php
        // vòng lặp - lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";

            // vòng lặp - lặp các cột
            for ($col = 1; $col <= 8; $col++) {
                if ($row % 2 != 0) {
                    if ($col % 2 != 0) {
                        echo '<td class="boxed white"></td>';
                    } else {
                        echo '<td class="boxed black"></td>';
                    }
                } elseif ($col % 2 != 0) {
                    echo '<td class="boxed black"></td>';
                } else {
                    echo '<td class="boxed white"></td>';
                }
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<!-- Đổ dữ liệu vòng lặp PHP lên HTML -->
<h2>Đổ dữ liệu vòng lặp PHP lên HTML F1(đổi đúng màu so le bàn cờ)</h2>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <?php
            for ($row = 'a'; $row <= 'h'; $row++) {
                echo "<td align='center'>$row</td>";
            }
            ?>
        </tr>
        <?php
        $index = 8;
        // vòng lặp - lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo "<td>$index</td>";
            // vòng lặp - lặp các cột
            for ($col = 1; $col <= 8; $col++) {
                if ($row % 2 != 0 && $col % 2 != 0 || $row % 2 == 0 && $col % 2 == 0) {
                    echo '<td class="boxed white"></td>';
                } else {
                    echo '<td class="boxed black"></td>';
                }
            }
            echo "</tr>";
            $index--;
        }
        ?>
    </tbody>
</table>

<!-- Đổ dữ liệu vòng lặp PHP lên HTML -->
<h2>Đổ dữ liệu vòng lặp PHP lên HTML F1(đổi đúng màu so le bàn cờ)</h2>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td></td>
            <?php
            for ($row = 'a'; $row <= 'h'; $row++) {
                echo "<td align='center'>$row</td>";
            }
            ?>
        </tr>
        <?php
        $index = 8;
        // vòng lặp - lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo "<td>$index</td>";
            // vòng lặp - lặp các cột
            for ($col = 1; $col <= 8; $col++) {
                if ($row % 2 != 0 && $col % 2 != 0 || $row % 2 == 0 && $col % 2 == 0) {
                    echo '<td class="boxed white"></td>';
                } else {
                    echo '<td class="boxed black"></td>';
                }
            }
            echo "</tr>";
            $index--;
        }
        ?>
    </tbody>
</table>

<!-- Đổ dữ liệu vòng lặp PHP lên HTML -->
<h2>Đổ dữ liệu vòng lặp PHP lên HTML F1(đổi đúng màu so le bàn cờ)</h2>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td></td>
            <?php
            for ($row = 'a'; $row <= 'h'; $row++) {
                echo "<td align='center'>$row</td>";
            }
            ?>
        </tr>
        <?php
        $index = 8;
        // vòng lặp - lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo "<td>$index</td>";
            // vòng lặp - lặp các cột
            for ($col = 1; $col <= 8; $col++) {
                if ($row % 2 != 0 && $col % 2 != 0 || $row % 2 == 0 && $col % 2 == 0) {
                    echo '<td class="boxed white"></td>';
                } else {
                    echo '<td class="boxed black"></td>';
                }
            }
            echo "<td>$index</td>";
            echo "</tr>";
            $index--;
        }
        ?>
        <tr>
            <td></td>
            <?php
            for ($row = 'a'; $row <= 'h'; $row++) {
                echo "<td align='center'>$row</td>";
            }
            ?>
        </tr>
    </tbody>
</table>

<!-- Tối ưu code -->
<h2>Tối ưu code</h2>
<table border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <?php
        $alphaLoop = null;
        for ($row = 'a'; $row <= 'h'; $row++) {
            $alphaLoop .= "<td align='center'>$row</td>";
        }
        echo "<tr><td></td>$alphaLoop</tr>";
        ?>

        <?php
        $index = 8;
        // vòng lặp - lặp các hàng
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo "<td>$index</td>";
            // vòng lặp - lặp các cột
            for ($col = 1; $col <= 8; $col++) {
                if ($row % 2 != 0 && $col % 2 != 0 || $row % 2 == 0 && $col % 2 == 0) {
                    echo '<td class="boxed white"></td>';
                } else {
                    echo '<td class="boxed black"></td>';
                }
            }
            echo "<td>$index</td>";
            echo "</tr>";
            $index--;
        }
        ?>
        <tr>
            <td></td>
            <?php
            for ($row = 'a'; $row <= 'h'; $row++) {
                echo "<td align='center'>$row</td>";
            }
            ?>
        </tr>
    </tbody>
</table>