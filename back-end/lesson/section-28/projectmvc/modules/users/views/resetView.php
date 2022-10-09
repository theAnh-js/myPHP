<html>
    <head>
        <title>login</title>
        <link href="public/css/common.css" rel="stylesheet" type="text/css"/>        
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrap-form-login">
            <h1 id="heading-content">kHÔI PHỤC MẬT KHẨU</h1>
            <form action="" method="POST" id="form-login">

                <input type="email" name="email" placeholder="Email" id="email"/>
                <p class="error-text"><?php echo show_error("email"); ?></p>

                <!--<input type="checkbox" name="remember_me" value="yes"/>Ghi nhớ đăng nhập.-->
                <input type="submit" name="btn-reset" value="Gửi yêu cầu" />
                <p class="error-text"><?php echo show_error("email-error"); ?></p>
            </form>
            <a class="lost-pass" href="<?php echo base_url("?mod=users&action=login") ?>">Đăng nhập</a>
            <a class="lost-pass" href="<?php echo base_url("?mod=users&action=register") ?>">Đăng ký</a>
        </div>

    </body>
</html>

