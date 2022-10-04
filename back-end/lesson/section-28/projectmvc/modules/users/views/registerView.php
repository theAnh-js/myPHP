<html>
    <head>
        <title>login</title>
        <link href="public/css/common.css" rel="stylesheet" type="text/css"/>        
        <link href="public/css/register.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrap-form-login">
            <h1 id="heading-content">ĐĂNG KÝ TÀI KHOẢN</h1>
            <form action="" method="POST" id="form-login">
                <input type="fullname" name="fullname" placeholder="Fullname" 
                       id="fullname" value="<?php echo show_value("fullname") ?>"/>
                <p class="error-text"><?php echo show_error("fullname"); ?></p>

                <input type="text" name="username" placeholder="Username" 
                       id="username" value="<?php echo show_value("username") ?>"/>
                <p class="error-text"><?php echo show_error("username"); ?></p>

                <input type="password" name="password" placeholder="Password" id="password"/>
                <p class="error-text"><?php echo show_error("password") ?></p>

                <input type="email" name="email" placeholder="Email" 
                       id="email" value="<?php echo show_value("email") ?>"/>
                <p class="error-text"><?php echo show_error("email") ?></p>

                <input type="submit" name="btn-login" value="Đăng ký" />
                <p class="error-text"><?php echo show_error("account"); ?></p>
            </form>
            <a class="lost-pass" href="?mod=users&action=login">Đăng nhập</a>
        </div>

    </body>
</html>

