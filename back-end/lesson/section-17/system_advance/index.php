
<?php require 'lib/common_func.php' ?>

<!--header-->

<!--content-->
<?php
#tạo đường dẫn
$mod = !empty($_GET["mod"])?$_GET["mod"]:"home";
$act = !empty($_GET["act"])?$_GET["act"]:"main";
$path = "modules/{$mod}/{$act}.php";

if (file_exists($path)) {
    require $path;
} else {
    require './include/404.php';
}
?>

<!--footer-->

