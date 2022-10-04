<?php
if (isset($_POST["btn_login"])) {
    $user_info = array(
        "username" => "admin",
        "password" => "admin123"
    );
    
    $username;
    $password;
    $errorList = array();
    if (empty($_POST["username"])) {
        $errorList["username"] = "Vui long nhap ten dang nhap";
    } else {
        $username = $_POST["username"];
    }
    if (empty($_POST["password"])) {
        $errorList["password"] = "Vui long nhap mat khau";
    } else {
        $password = $_POST["password"];
    }

    if(empty($errorList)){
        if(($username == $user_info["username"]) && ($password == $user_info["password"])){
            header("location: {$_POST['redirect_to']}");
        }else{
            $errorList["login"] = "Ten dang nhap hoac Mat khau khong chinh xac.";
        }
    }
    
    if(!empty($errorList)){
        echo "<pre>";
        print_r($errorList);
    }

}
?>

<html>
    <head>
        <title>Hidden form</title>
    </head>
    <body>
        <form action="" method='POST'>
            Username: <input type='text' name='username' > <br>
            Password: <input type='password' name='password'><br>
            <input type='hidden' name='redirect_to' value='cart.php'>
            <input type='submit' name='btn_login' value='Log in'>
        </form>
    </body>
</html>

