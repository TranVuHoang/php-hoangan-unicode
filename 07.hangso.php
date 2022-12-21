<?php
// khai báo hằng

#Cách 1
define("_WEB_HOT_ROOT", "https://tranvuhoangjr.github.io");
echo _WEB_HOT_ROOT . "<br/>";

#Cách 2
const _WEB_PATH_ROOT = "C:/xampp/htdocs";
echo _WEB_PATH_ROOT;

// tạo biên kiểm tra hằng có tồn tại k
$checkDefine = defined(_WEB_HOT_ROOT);
echo $checkDefine;
