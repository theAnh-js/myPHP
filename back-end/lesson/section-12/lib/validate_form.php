<?php

function is_username($username) {
    $partten_username = "/^[A-Za-z0-9_\.]{6,32}$/";
    $isValid_username = preg_match($partten_username, $username);
    return $isValid_username;
}

function is_password($password) {
    $password = $_POST["password"];
    $partten_password = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    $isValid_password = preg_match($partten_password, $password);
    return $isValid_password;
}

function error_form($error) {
    global $errorList;

    if (!empty($errorList[$error]))
        return false;
    return true;
}
?>

