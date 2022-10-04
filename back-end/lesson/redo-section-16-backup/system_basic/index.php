
<?php

session_start();
ob_start();

require 'data/user.php';

require 'lib/data.php';
require 'lib/redirect_url.php';
require 'lib/check_user_account.php';
require 'lib/common_func.php';
?>

<?php

#tạo đường dẫn
$page = !empty($_GET["page"]) ? $_GET["page"] : "home";
$path = "pages/{$page}.php";

#lưu thông tin người dùng để chỉ cần login 1 lần.
if(!empty($_COOKIE["is_login"])){
    $_SESSION["is_login"] = $_COOKIE["is_login"];
    $_SESSION["user_login"] = $_COOKIE["user_login"];
}

#điều hướng người dùng sang trang login khi họ 
#cố tình vào hệ thống trong khi chưa login.
if(empty($_SESSION["user_login"]) && $page != "login"){
    redirect("?page=login");
}

#điều hướng.
if (file_exists($path)) {
    require $path;
} else {
    require './include/404.php';
}
?>


