<?php
// ho va ten, ten dn, matkhau, email, sdt, gioi tinh.

if (isset($_POST["btn-register"])) {
    echo "<pre>";
    print_r($_POST);
    echo"----------------" . "<br>";
    
    $isSuccess = true;
    foreach ($_POST as $item) {
        
        echo $item."<br>";
        if (empty($item) || empty($_POST["gender"])) {
            $isSuccess = false;
            break;
        }
    }
    if ($isSuccess) {
        echo "<strong> Chúc mừng bạn đã đăng ký thành công. <strong>";
    } else {
        echo "<strong> Vui lòng nhập đầy đủ thông tin của bạn. </strong>";
    }
}
?>

<html>
    <head>
        <title>get data from form</title>
    </head>
    <body>
        <h2>Đăng ký</h2>
        <form action="" method="POST">
            <label for="fullname">Họ và Tên</label> 
            <input type="text" name="fullname" id="fullname"> <br>

            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username"> <br>

            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password"> <br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email"> <br>

            <label for="phone">Phone number</label>
            <input type="number" name="number-phone" id="phone"> <br>

            <label>Giới tính</label><br>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Nam</label><br>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Nữ</label>

            <br><br>
            <input type="submit" name="btn-register" value="Register">


        </form>

    </body>
</html>


