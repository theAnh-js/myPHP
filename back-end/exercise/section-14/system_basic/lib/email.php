<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
function send_mail($sent_to_email, $sent_to_fullname, $subject, $content) {
    global $config_email;
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = $config_email['host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = $config_email['username'];                     //SMTP username
        $mail->Password = $config_email['password'];                               //SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];            //Enable implicit TLS encryption
        $mail->Port = $config_email['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        $mail -> CharSet = "UTF-8";
       //Recipients
        $mail->setFrom($config_email['username'], $config_email['fullname']);
        $mail->addAddress($sent_to_email, $sent_to_fullname);     //Add a recipient
//        $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($config_email['username'], $config_email['fullname']);
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');

        //Attachments
//        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $content;
//        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
