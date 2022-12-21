<?php
$data = [
    'Tin tức',
    'Sản phẩm'
];

foreach ($data as $item) {
    $url = "?module= $item";
    echo '<a href="' . $url . '">' . $item . '</a>';
    echo "<br>";
}

echo '<pre>';
print_r($_SERVER['SERVER_PORT']);
echo '</pre>';