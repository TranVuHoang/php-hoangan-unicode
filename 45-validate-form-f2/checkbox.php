<?php
require_once './functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['hobbit'])) { // nếu tồn tại hobbit
        $hobbit = $_POST['hobbit'];
        echo '<pre>';
        print_r($hobbit);
        echo '</pre>';
        
        // foreach ($hobbit as $item) {
        //     echo $item . "<br/>";
        // }
    }
}

?>
<form action="" method="post">
    <h3>Sở thích</h3>
    <p>
        <input type="checkbox" name="hobbit[]" id="hobbit" value="1" <?php makeChecked(1) ?> />
        <label for="hobbit">Sở thích 1</label>
    </p>
    <p>
        <input type="checkbox" name="hobbit[]" id="hobbit" value="2" <?php makeChecked(2) ?> />
        <label for="hobbit">Sở thích 2</label>
    </p>
    <p>
        <input type="checkbox" name="hobbit[]" id="hobbit" value="3" <?php makeChecked(3) ?> />
        <label for="hobbit">Sở thích 3</label>
    </p>
    <p>
        <input type="checkbox" name="hobbit[]" id="hobbit" value="4" <?php makeChecked(4) ?> />
        <label for="hobbit">Sở thích 4</label>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>