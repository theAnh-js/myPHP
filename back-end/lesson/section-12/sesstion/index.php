<?php 
session_start();
echo "Trang chủ" . "<br>";

if (!isset($_SESSION["is_login"])) {
    header("Location: login.php");
} else {
    echo $_SESSION["is_login"] . "<br>";
    echo $_SESSION["username"] . "<br>";
    
    echo "<pre>";
    print_r($_SESSION) ;
}
?>

