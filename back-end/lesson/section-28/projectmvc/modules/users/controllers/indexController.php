<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index'); // nếu chỉ dùng nó ở phạm vi hẹp thì đến hàm dùng nó mới gọi.
    load("lib", "validation");
    load("lib", "email");
}

function indexAction() {
//    load_model("index"); vì đã gọi ở hàm construc nên phía dưới không cần gọi nữa.
//    $list_user = get_list_user();
////    show_array($list_user);
//    $data["list_user"] = $list_user;
//    $data["v"] = "vvvvvv";
//    load_view("index", $data);
}

function registerAction() {
    global $fullname, $username, $email, $password, $error_list;
//    echo send_mail('khanhta99887@gmail.com', 'anh the', 'you are ready', '<a href="https://youtube.com">click here</a>');
    if (isset($_POST["btn-login"])) {
        $error_list = array();

        if (empty($_POST["fullname"])) {
            $error_list["fullname"] = "Vui lòng nhập họ và tên của bạn";
        } else {
            $fullname = $_POST["fullname"];
        }

        if (empty($_POST["username"])) {
            $error_list["username"] = "Vui lòng nhập tên đăng nhập của bạn";
        } else {
            $username = $_POST["username"];
            if (!(strlen($username) >= 6 && strlen($username) <= 32)) {
                $error_list["username"] = "Vui lòng nhập từ 6 đến 32 ký tự";
            } else {
                $partten_username = " /^[A-Za-z0-9_\.]{6,32}$/";
                $isValid_username = preg_match($partten_username, $username);
                if (!$isValid_username) {
                    $error_list["username"] = "Tên đăng nhập chưa hợp lệ,...";
                }
            }
        }
        if (empty($_POST["password"])) {
            $error_list["password"] = "Vui lòng nhập mật khẩu của bạn";
        } else {
            $password = $_POST["password"];
            $partten_password = " /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            $isValid_password = preg_match($partten_password, $password);
            if (!$isValid_password) {
                $error_list["password"] = "Mật khẩu chưa hợp lệ,...";
            }

            $password = md5($_POST["password"]);
        }

        if (empty($_POST["email"])) {
            $error_list["email"] = "Vui lòng nhập email của bạn";
        } else {
            $email = $_POST["email"];
            $partten_email = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
            $isValid_email = preg_match($partten_email, $email);
            if (!$isValid_email) {
                $error_list["email"] = "Email không đúng định dạng";
            }
        }
        if (empty($error_list)) {
            if (!exists_user($username, $email)) {
                $active_token = md5($username . time());
                $data = array(
                    "fullname" => $fullname,
                    "username" => $username,
                    "password" => $password,
                    "email" => $email,
                    "active_token" => $active_token,
                );
                add_user($data);
                $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                $content = "<p>Chào bạn {$username}</p>"
                        . "<p>Bạn vui lòng click vào {$link_active} để kích hoạt tài khoản </p>"
                        . "<p>Nếu không phải bạn vui lòng bỏ qua email này.</p>";
                send_mail('khanhta99887@gmail.com', 'anh the', 'you are ready', $content);
//                redirect("?mod=users&action=login"); 
            } else {
                $error_list["account"] = "Tên đăng nhập hoặc email đã tồn tại";
            }
        }
        //    value="<?php if(!empty($_COOKIE["is_remember"])) echo remember_user_info("is_remember"); 
    }
    load_view("register");
}

function loginAction() {
    global $username, $password, $error_list;
    if (isset($_POST["btn-login"])) {
        $error_list = array();
        if (empty($_POST["username"])) {
            $error_list["username"] = "Vui lòng nhập tên đăng nhập của bạn.";
        } else {
            $username = $_POST["username"];
            if (!(strlen($username) >= 6 && strlen($username) <= 32)) {
                $error_list["username"] = "Vui lòng nhập từ 6 đến 32 ký tự";
            } else {
                $partten_username = " /^[A-Za-z0-9_\.]{6,32}$/";
                $isValid_username = preg_match($partten_username, $username);
                if (!$isValid_username) {
                    $error_list["username"] = "Tên đăng nhập chưa hợp lệ,...";
                }
            }
        }
        if (empty($_POST["password"])) {
            $error_list["password"] = "Vui lòng nhập mật khẩu của bạn.";
        } else {
            $password = $_POST["password"];
            $partten_password = " /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            $isValid_password = preg_match($partten_password, $password);
            if (!$isValid_password) {
                $error_list["password"] = "Mật khẩu chưa hợp lệ,...";
            }
            $password = md5($_POST["password"]);
        }
        if (empty($error_list)) {
            if (check_login($username, $password)) {
                #thiết lập session (việc start session thì làm ở trang index rổi.)
//                    ob_start();
//                    session_start();
                $_SESSION["is_login"] = true;
                $_SESSION["user_login"] = $username;

                redirect();
            } else {
                $error_list["login-failure"] = "<strong>Tên đăng nhập hoặc Mật khẩu chưa chính xác</strong>";
            } 
        }
    }
    load_view("login");
}

function activeAction() {
    $active_token = $_GET["active_token"];
    if (check_active_token($active_token)) {
        active_user($active_token);
        $link_login = base_url("?mod=users&action=login");
        echo "Bạn đã kịch hoạt thành công. Vui lòng click vào <a href='{$link_login}'>đây</a> để đăng nhập."; //cần có giao diện cho đẹp.
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ, hoặc tài khoản đã được kích hoạt trước đó.";
    }
}

function logoutAction() {
    unset($_SESSION["user_login"]);
    unset($_SESSION["is_login"]);

    redirect("?mod=users&action=login");
}

function resetAction() {
    global $email, $error_list, $password;
    $reset_token = $_GET["reset_token"];
    if (!empty($reset_token)) {
        if (check_reset_token($reset_token)) {
            if (isset($_POST["btn-newPass"])) {
                if (empty($_POST["password"])) {
                    $error_list["password"] = "Vui lòng nhập mật khẩu của bạn.";
                } else {
                    $password = $_POST["password"];
                    $partten_password = " /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
                    $isValid_password = preg_match($partten_password, $password);
                    if (!$isValid_password) {
                        $error_list["password"] = "Mật khẩu chưa hợp lệ,...";
                    }
                    $password = md5($_POST["password"]);
                }
            }
            if(empty($error_list)){
                $data = array(
                    'password' => $password
                );
                update_pass($data, $reset_token);
                redirect("?mod=users&action=resetSuccess");
            }
            load_view("newPass");
        } else {
            echo "Yêu cầu lấy lại mật khẩu không hợp lệ";
        }
    } else {
        if (isset($_POST["btn-reset"])) {
            if (empty($_POST["email"])) {
                $error_list["email"] = "Vui lòng nhập email của bạn";
            } else {
                $email = $_POST["email"];
                $partten_email = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
                $isValid_email = preg_match($partten_email, $email);
                if (!$isValid_email) {
                    $error_list["email"] = "Email không đúng định dạng";
                }
            }
            if (empty($error_list)) {
                if (check_email($email)) {
                    $reset_token = md5($email . time());
                    $data = array(
                        "reset_token" => $reset_token,
                    );
                    //Cập nhật reset_token cho user cần khôi phục password.
                    update_reset_token($data, $email);
                    //Gửi link khôi phục cho user đó.
                    $link = base_url("?mod=users&action=reset&reset_token='{$reset_token}'");
                    $content = "<p>Bạn vui lòng click vào link sau để khôi phục mật khẩu: {$link}</p>" .
                            "<p>Nếu không phải bạn, vui lòng bỏ qua email này.</p>";
                    send_mail($email, '', 'Khôi phục mật khẩu của bạn.', $content);
                } else {
                    $error_list["email-error"] = "Địa chỉ email không tồn tại.";
                }
            }
        }
        load_view("reset");
    }
}
function resetSuccessAction(){
    load_view('resetSuccess');
}
