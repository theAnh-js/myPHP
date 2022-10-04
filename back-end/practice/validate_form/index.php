
<?php
require "lib_func/show_arr.php";
?>

<?php
if (isset($_POST["btn_submit"])) {
    $error_list = array();

#fullname
    if (empty($_POST["fullname"])) {
        $error_list["fullname"] = "Vui lòng nhập họ và tên của bạn.";
    } else {
        $fullname = $_POST["fullname"];
        $partten_fullname = "/^[A-Za-z0-9\s]{6,32}$/";
        if (!(strlen($fullname) >= 6 && strlen($fullname) <= 32)) {
            $error_list["fullname"] = "Họ và tên cần ít nhất từ 6 đến 32 ký tự.";
        } else {
            $is_valid_fullname = preg_match($partten_fullname, $fullname);
            if (!$is_valid_fullname) {
                $error_list["fullname"] = "Vui lòng điền họ và tên đúng định dạng.";
            }
        }
    }

#username
    if (empty($_POST["username"])) {
        $error_list["username"] = "Vui lòng nhập tên đăng nhập của bạn.";
    } else {
        $username = $_POST["username"];
        $partten_username = "/^[A-Za-z0-9_]{6,32}$/";
        if (!(strlen($username) >= 6 && strlen($username) <= 32)) {
            $error_list["username"] = "Tên đăng nhập cần ít nhất từ 6 đến 32 ký tự.";
        } else {
            $is_valid_username = preg_match($partten_username, $username);
            if (!$is_valid_username) {
                $error_list["username"] = "Vui lòng điền tên đăng nhập đúng định dạng.";
            }
        }
    }

#password
    if (empty($_POST["password"])) {
        $error_list["password"] = "Vui lòng điền mật khẩu của bạn.";
    } else {
        $password = $_POST["password"];
        $partten_password = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if (!(strlen($password) >= 6 && strlen($password) <= 32)) {
            $error_list["password"] = "Mật khẩu cần ít nhất từ 6 đến 32 ký tự.";
        } else {
            $is_valid_password = preg_match($partten_password, $password);
            if (!$is_valid_password) {
                $error_list["password"] = "Vui lòng điền mật khẩu đúng định dạng.";
            }
        }
    }

#email
    if (empty($_POST["email"])) {
        $error_list["email"] = "Vui lòng nhập email của bạn.";
    } else {
        $email = $_POST["email"];
        $partten_email = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";

        $is_valid_email = preg_match($partten_email, $email);
        if (!$is_valid_email) {
            $error_list["email"] = "Vui lòng điền email đúng định dạng.";
        }
    }

#gender
    if (empty($_POST["gender"])) {
        $error_list["gender"] = "Vui lòng chọn giới tính của bạn.";
    } else {
        $gender = $_POST["gender"];
    }
    
    if(empty($error_list)){
        echo "register successfully";
    }else{
        show_arr($error_list);
    }
}
?>

<html>
    <head>
        <title>practice validate form</title>

        <style>
            input{
                display: block;
            }
            span{
                display: block;
                margin-bottom: 12px;
                color: red;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <h1>Validate form</h1>
        <form action="" method="POST">
            <label for="fullname">Full name</label><br>
            <input type="text" name="fullname" id="fullname"/>
            <span><?php if (!empty($error_list["fullname"])) echo $error_list["fullname"]; ?></span>

            <label for="username">User name</label><br>
            <input type="text" name="username" id="username"/>
            <span><?php if (!empty($error_list["username"])) echo $error_list["username"]; ?></span>


            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"/>
            <span><?php if (!empty($error_list["password"])) echo $error_list["password"]; ?></span>


            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"/>
            <span><?php if (!empty($error_list["email"])) echo $error_list["email"]; ?></span>


            <label for="gender">Email</label><br>
            <select name="gender" id="gender">
                <option value=""></option>
                <option value="male">Male</option>                
                <option value="femal">Female</option>
            </select><br>
            <span><?php if (!empty($error_list["gender"])) echo $error_list["gender"]; ?></span>


            <input type="submit" name="btn_submit" value="Register"/>
        </form>

    </body>
</html>


