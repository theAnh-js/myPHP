<?php
require '../lib/validate_form.php';

if (isset($_POST["btn-login"])) {

    $errorList = array();

    if (empty($_POST["username"])) {
        $errorList["username"] = "Vui lòng nhập trường này.";
    } else {
        $username = $_POST["username"];
        if (!(strlen($username) >= 6 && strlen($username) <= 32))
            $errorList["username"] = "Vui lòng nhập từ 6 đến 32 ký tự.";
        else {
            if (!is_username($username)) {
                $errorList["username"] = "Vui lòng nhập tên hợp lệ, có thể bao gồm các chữ cái, số, dấu gạch dưới, dấu chấm.";
            }
        }
    }
    if (empty($_POST["password"])) {
        $errorList["password"] = "Vui lòng nhập trường này.";
    } else {
        $password = $_POST["password"];
        if (!is_password($password)) {
            $errorList["password"] = "Vui lòng nhập từ 6 đến 32 ký tự, bắt đầu bằng chữ cái in hoa, có thể sử dụng chứ cái, số và các ký tự đặc biệt.";
        }
    }

    if (empty($errorList)) {
        $user_info = array(
            "username" => "admin123",
            "password" => "Admin123"
        );
        if ($username == $user_info["username"] && $password == $user_info["password"]) {
            echo "Username: {$username} - Password: {$password}";
            
            #set cookie
            if (isset($_POST["remain"])) {
                setcookie("is_login", true, time() + 3600);
                setcookie("user_login", "luongtheanh", time() + 3600);
            }
            header("Location: index.php");
        } else {
            echo "<strong> Tài khoản không tồn tại!</strong>";
        }
    }
}
?>

<html>
    <head>
        <title>validate form and save data</title>
    </head>
    <body>
        <h1>Đăng nhập </h1>
        <form action="" method="POST">
            <label for="username">Tên đăng nhập </label><br>
            <input type="text" name="username" id="username" value="<?php if (!empty($username)) echo $username ?>"/><br>
            <p><?php if (!error_form("username")) echo $errorList["username"]; ?></p>

            <label for="password">Mật khẩu</label><br>
            <input type="password" name="password" id="password"/><br>
            <p><?php if (!error_form("password")) echo $errorList["password"]; ?></p><br>

            <label for="remain">Ghi nhớ đăng nhập</label>
            <input type="checkbox" name="remain" value="Yes" id="remain"/><br><br>

            <input type="submit" name="btn-login" value="LOGIN"/>
        </form>

    </body>

    <style>
        p{
            color: red;
            font-size: 10px;
        }
    </style>
</html>



