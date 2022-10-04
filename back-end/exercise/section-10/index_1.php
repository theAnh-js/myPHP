<?php 
if(isset($_POST["btn-login"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "--------------------"."<br>";
    
    $user_info = array(
        "username" => "admin",
        "password" => "123456",
    );
    
    $username;
    $password;
    $error_list = array();
    
    
    #username
    if(empty($_POST["username"])){
        $error_list["username-empty"] = "Vui long nhap ten dang nhap cua ban";
    }else{
        $username = $_POST["username"];
    }
    #password
    if(empty($_POST["password"])){
        $error_list["password-empty"] = "Vui long nhap mat khau cua ban";
    }else{
        $password = $_POST["password"];
    }
    
    #check password and username are valid?
    if(empty($error_list)){
        if(($user_info["username"] == $username) && ($user_info["password"] == $password)){
            echo "Đăng nhập thành công.";
        }else{
            echo "Ten dang nhap hoac Mat khau chua chinh xac!";
        }
    }else{
        echo "<pre>";
        print_r($error_list);
    }
}

?>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <h2>Đăng nhập</h2>
        <form action="" method="POST">
            <label for="username">Tên đăng nhập</label>
            <input  type="text" name="username" id="username"><br>

            <label for="password">Mật khẩu</label>
            <input  type="password" name="password" id="password"><br>

            <input type="submit" name="btn-login" value="LOGIN">

        </form>

    </body>
</html>


