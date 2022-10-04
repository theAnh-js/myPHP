<?php

echo "Trang chủ <br>";

if(isset($_COOKIE["is_login"])){
    echo "Cookie: {$_COOKIE["user_login"]}";
}
?>
<br>
<a href="logout.php">Đăng xuất</a>
