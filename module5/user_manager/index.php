<?php
session_start();
require_once './config.php';

// $module = _MODULE_DEFAULT;
// $action = _ACTION_DEFAULT;

$module = !empty($_GET['module']) ? trim($_GET['module']) : 'home';
$action = !empty($_GET['action']) ? trim($_GET['action']) : "lists";

$path = 'modules/' . $module . '/' . $action . '.php';

if (file_exists($path)) {
    require_once $path;
} else {
    require_once 'modules/errors/404.php';
}

// echo '_WEB_PATH_TEMPLATE: ';
// echo _WEB_PATH_TEMPLATE;
// echo '<br>';
// echo '_WEB_HOST_TEMPLATE: '._WEB_HOST_TEMPLATE;
// echo '<br>';
// echo '_WEB_HOST_ROOT: '._WEB_HOST_ROOT;
// echo '<br>';
