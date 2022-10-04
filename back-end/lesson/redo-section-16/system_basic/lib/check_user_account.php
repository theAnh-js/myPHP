<?php

function check_login($username, $password) {
    global $list_user;
    foreach ($list_user as $user) {
        if ($username == $user["username"] && md5($password) == $user["password"]) {
            return true;
        }
    }
    return false;
}

function show_user_info($field) {
    global $list_user;
    if ($_SESSION["is_login"]) {
        foreach ($list_user as $user) {
            if ($_SESSION["user_login"] == $user["username"]) {
                if (array_key_exists($field, $user)) {
                    return $user[$field];
                }
            }
        }
    }
}

function remember_user_info($is_remember) {
    if (!empty($is_remember))
        return $_COOKIE["user_login"];
}
