<?php
if (isset($_POST["btn_login"])) {
    echo "<pre>";
    print_r($_POST);

    if (empty($_POST["username"])) {
        echo "Vui lòng nhập tên đăng nhập của bạn.";
    } else {
        echo $_POST["username"];
    }
    
    if(empty($_POST["password"])){
        echo "Vui lòng nhập mật khẩu của bạn.";
    }else{
        echo $_POST["password"];
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu từ </title>
    </head>
    <body>
        <form action="" method='POST'>
            Tên đăng nhập: <input type='text' name='username'><br>
            Mật khẩu: <input type='password' name='password'><br>
            <input type='submit' name='btn_login' value='Log in'>
        </form>
    </body>
</html>


