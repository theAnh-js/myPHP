
<!--content-->
<?php
#tạo đường dẫn
$page = !empty($_GET["page"]) ? $_GET["page"] : "home";
$path = "pages/{$page}.php";
if (file_exists($path)) {
    require $path;
} else {
    require './include/404.php';
}
?>


