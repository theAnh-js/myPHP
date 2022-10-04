<?php
ob_start();
session_start();
unset($_SESSION["is_login"]);
unset($_SESSION["user_login"]);
?>
<a href="login.php">Đăng xuất</a>
