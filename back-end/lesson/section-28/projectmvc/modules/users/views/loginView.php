<html>
    <head>
        <title>login</title>
        <link href="public/css/common.css" rel="stylesheet" type="text/css"/>        
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrap-form-login">
            <h1 id="heading-content">ĐĂNG NHẬP</h1>
            <form action="" method="POST" id="form-login">
                <input type="text" name="username" placeholder="Username" id="username" value="<?php echo show_value("username") ?>"/>
                <p class="error-text"><?php echo show_error("username") ?></p>

                <input type="password" name="password" placeholder="Password" id="password"/>
                <p class="error-text"><?php echo show_error("password"); ?></p>

                <input type="checkbox" name="remember_me" value="yes"/>Ghi nhớ đăng nhập.
                <input type="submit" name="btn-login" value="Đăng nhập" />
                <p class="error-text"><?php show_error("login-failure"); ?></p>
            </form>
            <a class="lost-pass" href="<?php echo base_url("?mod=users&action=lostPass") ?>">Quên mật khẩu?</a>
            <a class="lost-pass" href="<?php echo base_url("?mod=users&action=register") ?>">Đăng ký</a>
        </div>

    </body>
</html>