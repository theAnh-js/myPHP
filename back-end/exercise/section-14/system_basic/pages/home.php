<?php
//require 'lib/config/email.php';
//require 'lib/email.php';

$sent_to_email = 'khanhta99887@gmail.com';
$sent_to_fullname = 'anh the';
$subject = 'Test mail';
$content = 'Nội dung được gửi từ hàm <b> send_mail() </b>';
send_mail($sent_to_email, $sent_to_fullname, $subject, $content);
?>

<div id="content">
    <h1 class="heading-content">HOME</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna 
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit 
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
        occaecat cupidatat non proident, sunt in culpa qui officia 
        deserunt mollit anim id est laborum.</p>
</div>
