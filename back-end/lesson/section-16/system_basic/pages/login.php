<?php
require '../data/users.php';

if (isset($_POST["btn-login"])) {
    $error_list = array();

    if (empty($_POST["username"])) {
        $error_list["username"] = "Vui lòng nhập tên đăng nhập của bạn.";
    } else {
        $username = $_POST["username"];
        if (!(strlen($username) >= 6 && strlen($username) <= 32)) {
            $error_list["username"] = "Vui lòng nhập từ 6 đến 32 ký tự";
        } else {
            $partten_username = " /^[A-Za-z0-9_\.]{6,32}$/";
            $isValid_username = preg_match($partten_username, $username);
            if (!$isValid_username) {
                $error_list["username"] = "Tên đăng nhập chưa hợp lệ,...";
            }
        }
    }
    if (empty($_POST["password"])) {
        $error_list["password"] = "Vui lòng nhập mật khẩu của bạn.";
    } else {
        $password = $_POST["password"];
        $partten_password = " /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $isValid_password = preg_match($partten_password, $password);
        if (!$isValid_password) {
            $error_list["password"] = "Mật khẩu chưa hợp lệ,...";
        }
    }

//    echo "<pre>";
//    print_r($list_user);

    if (empty($error_list)) {
        foreach ($list_user as $user) {
            if ($username == $user["username"] && md5($password) == $user["password"]) {

                #thiết lập session (việc start session thì làm ở trang index rổi.)
                ob_start();
                session_start();
                $_SESSION["is_login"] = true;
                $_SESSION["user_login"] = $username;

                header("Location: http://localhost/unitop/back-end/lesson/section-16/system_basic/index.php?page=home");
            } else {
                $error_list["login-failure"] = "<strong>Tên đăng nhập hoặc Mật khẩu chưa chính xác</strong>";
            }
        }
    }
}
?>
<html>
    <head>
        <title>login</title>
        <link href="../public/css/common.css" rel="stylesheet" type="text/css"/>        
        <link href="../public/css/login.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div id="wrap-form-login">
            <h1 id="heading-content">ĐĂNG NHẬP</h1>
            <form action="" method="POST" id="form-login">
                <input type="text" name="username" placeholder="Username" id="username"/>
                <p class="error-text"><?php if (!empty($error_list["username"])) echo $error_list["username"]; ?></p>

                <input type="password" name="password" placeholder="Password" id="password"/>
                <p class="error-text"><?php if (!empty($error_list["password"])) echo $error_list["password"]; ?></p>

                <input type="submit" name="btn-login" value="Đăng nhập" />
                <p class="error-text"><?php if (!empty($error_list["login-failure"])) echo $error_list["login-failure"]; ?></p>

            </form>
            <a class="lost-pass" href="#">Quên mật khẩu?</a>
        </div>

    </body>
</html>


