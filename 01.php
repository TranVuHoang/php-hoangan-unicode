<table border="2" cellspacing="0" cellpadding="5">
    <tr>
        <?php
        for ($i = 2; $i <= 98; $i += 2) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<td>FOOBAZ</td>";
            } else if ($i % 3 == 0) {
                echo "<td>FOO</td>";
            } else if ($i % 5 == 0) {
                echo "<td>BAZ</td>";
            } else {
                echo "<td>$i</td>";
            }
            if ($i % 14 == 0) {
                echo "<tr></tr>";
            }
        }
        ?>
    </tr>
</table>

<style>
    table {
        /* bdcl + tab */
        border-collapse: collapse;
    }
</style>