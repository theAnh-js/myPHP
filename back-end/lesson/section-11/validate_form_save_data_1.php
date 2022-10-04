<?php
if (isset($_POST["btn-login"])) {

    $errorList = array();

    if (empty($_POST["username"])) {
        $errorList["username"] = "Vui lòng nhập trường này.";
    } else {
        $username = $_POST["username"];
    }
    if (empty($_POST["password"])) {
        $errorList["password"] = "Vui lòng nhập trường này.";
    } else {
        $password = $_POST["password"];
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

