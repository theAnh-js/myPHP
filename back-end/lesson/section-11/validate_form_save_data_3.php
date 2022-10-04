<?php
if (isset($_POST["btn-login"])) {

    $errorList = array();

    if (empty($_POST["username"])) {
        $errorList["username"] = "Vui lòng nhập trường này.";
    } else {
        $username = $_POST["username"];
        if (!(strlen($username) >= 6 && strlen($username) <= 32))
            $errorList["username"] = "Vui lòng nhập từ 6 đến 32 ký tự.";
        else {
            $partten_username = "/^[A-Za-z0-9_\.]{6,32}$/";
            $isValid_username = preg_match($partten_username, $username);
            if (!$isValid_username) {
                $errorList["username"] = "Vui lòng nhập tên hợp lệ, có thể bao gồm các chữ cái, số, dấu gạch dưới, dấu chấm.";
            }
        }
    }
    if (empty($_POST["password"])) {
        $errorList["password"] = "Vui lòng nhập trường này.";
    } else {
        $password = $_POST["password"];
        $partten_password = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $isValid_password = preg_match($partten_password, $password);
        if (!$isValid_password) {
            $errorList["password"] = "Vui lòng nhập từ 6 đến 32 ký tự, bắt đầu bằng chữ cái in hoa, có thể sử dụng chứ cái, số và các ký tự đặc biệt.";
        }
    }

    if (empty($errorList)) {
        echo "Username: {$username} - Password: {$password}";
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
            <input type="text" name="username" id="username" value="<?php if (!empty($username)) echo $username ?>"><br>
            <p><?php if (!empty($errorList["username"])) echo $errorList["username"]; ?></p>

            <label for="password">Mật khẩu</label><br>
            <input type="password" name="password" id="password"><br>
            <p><?php if (!empty($errorList["password"])) echo $errorList["password"]; ?></p><br><br>

            <input type="submit" name="btn-login" value="LOGIN">
        </form>

    </body>

    <style>
        p{
            color: red;
            font-size: 10px;
        }
    </style>
</html>

