<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "{$username}-{$password}";
}

// Khi action="login.php" thì sau khi submit, dữ liệu 
// sẽ đk chuyển đến file login.php

// Còn khi muốn sử dụng tại trang đăng nhập thì để action="",
// rồi xử lý php ở cùng 1 file.

?>
<html>
    <head>
        <title>Truyền dữ liệu form với phương thức POST</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="login.php" method="POST">
            Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>


