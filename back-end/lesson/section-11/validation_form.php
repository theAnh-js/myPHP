<?php
if (isset($_POST["btn-login"])) {
    $errorList = array();

    if (empty($_POST["username"])) {
        $errorList["username"] = "Không được để trống trường này.";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        $errorList["password"] = "Không được để trống trường này.";
    } else {
        $password = $_POST["password"];
    }

    if (empty($errorList)) {
        echo "Username: {$username}" . "<br>" . "Password: {$password}";
    }
}
?>
<html>
    <head>
        <title>Validation_form</title>
    </head>
    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            <label for="username">Tên đăng nhập</label>
            <input type="=text" name="username" id="username"><br>
            <span> <?php if (!empty($errorList["username"])) echo $errorList["username"] ?> </span>

            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
            <span> <?php if (!empty($errorList["password"])) echo $errorList["password"] ?> </span>


            <input type="submit" name="btn-login" value="Đăng ">
        </form>
    </body>

    <style>
        input{
            margin-bottom: 5px;
        }
        span{
            color: red;
            display: block;
            margin-bottom: 12px;
            font-size: 10px;
        }
    </style>
</html>


