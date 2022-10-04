<?php
if (isset($_POST["btn-add"])) {
    $error_list = array();
    #fullname
    if (empty($_POST["fullname"])) {
        $error_list["fullname"] = "Vui lòng nhập họ và tên.";
    } else {
        $fullname = $_POST["fullname"];
    }
    #username
    if (empty($_POST["username"])) {
        $error_list["username"] = "Vui lòng nhập tên đăng nhập.";
    } else {
        $username = $_POST["username"];
        $partten_username = "/^[A-Za-z0-9_\.]{6,32}$/";
        $isValid_username = preg_match($partten_username, $username);
        if (!$isValid_username) {
            $error_list["username"] = "Tên đăng nhập chưa hợp lệ,...";
        }
    }
    #password
    if (empty($_POST["password"])) {
        $error_list["password"] = "Vui lòng nhập mật khẩu.";
    } else {
        $password = $_POST["password"];
        $partten_password = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $isValid_password = preg_match($partten_password, $password);

        #mã hóa password luôn:
        #nếu ko md5 thì vào trong phpmyadmin password không đk mã hóa.
        $password = md5($password);

        if (!$isValid_password) {
            $error_list["password"] = "Mật khẩu chưa hợp lệ,...";
        }
    }
    #email
    if (empty($_POST["email"])) {
        $error_list["email"] = "Vui lòng nhập email.";
    } else {
        $email = $_POST["email"];
        $partten_email = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        $isValid_email = preg_match($partten_email, $email);
        if (!$isValid_email) {
            $error_list["email"] = "Email chưa hợp lệ,...";
        }
    }
    #gender
    if (empty($_POST["gender"])) {
        $error_list["gender"] = "Vui lòng chọn giới tính.";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($error_list)) {
        $my_sql = "INSERT INTO `tbl_user` (`fullname`, `username`, `password`, `email`, `gender`)"
                . "VALUE ('{$fullname}', '{$username}', '{$password}', '{$email}', '{$gender}')";
        if (mysqli_query($conn, $my_sql)) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Error!" . mysqli_error($conn);
        }
    } else {
        show_arr($error_list);
    }
}
?>

<?php get_header() ?>
<div id="content">
    <div class="form-wrapper">
        <form action="" method="POST">
            <div>
                <label for="fullname">Họ và tên</label>
                <input type="text" name="fullname" id="fullname"/>
                <span><?php if (!empty($error_list["fullname"])) echo $error_list["fullname"]; ?></span>
            </div>


            <div>
                <label for="username" >Tên đăng nhập</label>
                <input type="text" name="username" id="username"/>
                <span><?php if (!empty($error_list["username"])) echo $error_list["username"]; ?></span>
            </div>

            <div>
                <label for="password">Mật khẩu</label>
                <input name="password" type="password" id="password"/>
                <span><?php if (!empty($error_list["password"])) echo $error_list["password"]; ?></span>

            </div>

            <div>
                <label for="email">Email</label>
                <input name="email" type="email" id="email"/>
                <span><?php if (!empty($error_list["email"])) echo $error_list["email"]; ?></span>

            </div>

            <div>
                <label>Giới tính</label>
                <select name="gender">
                    <option value="">--Tùy chọn--</option>
                    <option value="male">Nam</option>            
                    <option value="female">Nữ</option>
                </select>
                <span><?php if (!empty($error_list["gender"])) echo $error_list["gender"]; ?></span>

            </div>
            <input type="submit" name="btn-add" value="Submit"/>
        </form>
    </div>
</div>
<?php get_footer() ?>
<style>

    .form-wrapper div{
        margin-bottom: 15px;
    }
    span{
        color: red;
        font-size: 12px;
    }
</style>
