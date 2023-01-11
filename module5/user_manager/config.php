<?php

/**
 * File này chứa hằng số cấu hình
 */

const _MODULE_DEFAULT = 'home'; // module mặc định
const _ACTION_DEFAULT = 'lists'; // action mặc định

const _INCODE = true; // ngăn chặn hành vi truy cập trực tiếp vào file thông qua url

// Thiết lập host

/** Địa chỉ trang chủ */
define('_WEB_HOST_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/course/youtube/02-back-end/php/hoang.anh.unicode/module5/user_manager');

define('_WEB_HOST_TEMPLATE', _WEB_HOST_ROOT . '/templates');

/** Thiết lập path */
define('_WEB_PATH_ROOT', __DIR__);
define('_WEB_PATH_TEMPLATE', _WEB_PATH_ROOT . '\templates');
