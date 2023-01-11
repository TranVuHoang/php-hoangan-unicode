<?php

/**
 * File login.php chứa chức năng login
 */
if (!defined('_INCODE')) die('Access Deined...'); // kiểm tra xem hằng số _INCODE có tồn tại không nếu k tồn tại thì die() luôn

require_once _WEB_PATH_TEMPLATE . '\layouts\header.php';
?>
<div class="row">
    <div class="col-6" style="margin: 0 auto;">
        <h3 class="text-center">ĐĂNG NHẬP HỆ THỐNG</h3>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email..." required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password..." required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button><br/>
            <p class="text-center"><a href="<?php echo '?module=auth&action=forgot';?>">Forgot password ?</a></p>
            <p class="text-center"><a href="<?php echo '?module=auth&action=register';?>">Register now</a></p>
        </form>
    </div>
</div>
<?php
require_once _WEB_PATH_TEMPLATE . '\layouts\footer.php';
