<?php
if (isset($_POST["btn-register"])) {
    $errorList = array();

    #fullname
    if (empty($_POST["fullname"])) {
        $errorList["fullname"] = "Vui lòng nhập họ và tên của bạn.";
    } else {
        $fullname = $_POST["fullname"];
        if (!(strlen($fullname) >= 6 && strlen($fullname) <= 32)) {
            $errorList["fullname"] = "Vui lòng nhập từ 6 đến 32 ký tự.";
        } else {
            $partten_fullname = "/^[A-Za-z0-9_\.\s]{6,32}$/";
            $isValid_fullname = preg_match($partten_fullname, $fullname);
            if (!$isValid_fullname) {
                $errorList["fullname"] = "Vui lòng nhập tên hợp lệ, có thể bao gồm các chữ cái, số, dấu gạch chân, dấu chấm, và dấu cách.";
            }
        }
    }
    #username
    if (empty($_POST["username"])) {
        $errorList["username"] = "Vui lòng nhập tên đăng nhập của bạn.";
    } else {
        $username = $_POST["username"];
        if (!(strlen($username) >= 6 && strlen($username) <= 32)) {
            $errorList["username"] = "Tên đăng nhập cần ít nhất 6 ký tự, và không quá 32 ký tự.";
        } else {
            $partten_username = "/^[A-Za-z0-9_\.]{6,32}$/";
            $isValid_username = preg_match($partten_username, $username);
            if (!$isValid_username) {
                $errorList["username"] = "Vui lòng nhập tên đăng nhập hợp lệ, có thể bao gồm các chữ cái, số, dấu gạch chân, dấu chấm, không bao gồm dấu cách.";
            }
        }
    }

    #password
    if (empty($_POST["password"])) {
        $errorList["password"] = "Vui lòng nhập mật khẩu của bạn.";
    } else {
        $password = $_POST["password"];
        $partten_password = " /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $isValid_password = preg_match($partten_password, $password);
        if (!$isValid_password) {
            $errorList["password"] = "Vui lòng nhập mật khẩu hợp lệ, có thể bao gồm các chữ cái, số, dấu gạch chân, dấu chấm, và các ký tự đặc biệt.";
        }
    }
    #phone_number
    if (empty($_POST["tel"])) {
        $errorList["tel"] = "Vui lòng nhập số điện thoại của bạn.";
    } else {
        $tel = $_POST["tel"];
    }
    
    #show information :
    if(empty($errorList)){
        echo "<strong>Fullname: {$fullname} </strong>" . "<br>";
        echo "<strong>Username: {$username} </strong>" . "<br>";
        echo "<strong>Password: {$password} </strong>" . "<br>";
        echo "<strong>Phone: {$tel} </strong>" . "<br>";
    }
}

?>

<html>
    <head>
        <title>Đăng ký</title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Đăng ký </h2>
            <label for="fullname">Họ và tên</label>
            <input type="text" name="fullname" id="fullname" value="<?php if (!empty($_POST["fullname"])) echo $fullname; ?>">
            <span><?php if (!empty($errorList["fullname"])) echo $errorList["fullname"] ?></span>

            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username" value="<?php if (!empty($_POST["username"])) echo $username; ?>">
            <span><?php if (!empty($errorList["username"])) echo $errorList["username"] ?></span>


            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
            <span><?php if (!empty($errorList["password"])) echo $errorList["password"]; ?></span>

            <label for="tel">Số điện thoại</label>
            <input type="number" name="tel" id="tel" value="<?php if (empty($errorList["tel"])) echo $tel; ?>">
            <span><?php if (!empty($errorList["tel"])) echo $errorList["tel"]; ?></span>

            <input type="submit" name="btn-register" value="Đăng ký">
        </form>

    </body>
    <style>
        input{
            display: block;
        }
        span{
            display: block;
            font-size: 12px;
            margin-bottom: 10px;
            color: red;
        }
        input[type="submit"]{
            display: block;
            margin-top: 35px;
        }

    </style>
</html>

