<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include_once './validate_form.php';
    ?>
    <form action="" method="POST">
        <p>
            <label for="fullname">Fullname:</label><br>
            <input type="text" name="fullname" id="fullname" placeholder="Họ và tên...">
        </p>
        <p>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" placeholder="Email...">
        </p>
        <p>
            <label for="age">Age:</label><br>
            <input type="text" name="age" id="age" placeholder="Tuổi...">
        </p>
        <p>
            <button type="submit" value="submit"></button>
        </p>
    </form>
</body>

</html>