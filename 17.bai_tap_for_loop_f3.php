<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập vẽ tam giác sử dụng vòng lặp for</title>
</head>

<body>
    <?php
    /**
     * Vẽ tam giác với N dòng sử dụng vòng lặp for
     *
     * Input: đưa vào số dòng N
     * Output: tam giác vuông với N dòng
     * *
     * **
     * ***
     * ****
     * *****
     *
     */
    $n = 5;

    // vẽ hình vuông
    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $n; $col++) {
            echo '* ';
        }
        echo '<br/>';
    }

    // vẽ tam giác vuông
    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            if ($col < $row) {
                echo $row;
            } else {
                echo $row;
            }
        }
        echo '<br/>';
    }
    ?>
</body>

</html>