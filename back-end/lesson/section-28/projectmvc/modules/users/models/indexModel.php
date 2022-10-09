<?php

function check_login($username, $password) {
    $check = db_num_rows("SELECT * FROM `tbl_user` WHERE `username`='{$username}'AND `password`='{$password}'");
    if ($check > 0)
        return true;
    return false;
}

function add_user($data) {
    if (!empty($data)) {
        return db_insert("tbl_user", $data);
    }
}

function exists_user($username, $email) {
    $check_exists = db_num_rows("SELECT * FROM `tbl_user` WHERE `username` = '$username'OR `email` = '$email'");
    if ($check_exists > 0)
        return true;
    return false;
}

function active_user($active_token) {
    return db_update('tbl_user', array('is_active' => 1), "active_token ='$active_token'");
}

function check_active_token($active_token) {
    $check = db_num_rows("SELECT * FROM `tbl_user` WHERE `active_token` = '{$active_token}'AND `is_active` = '0'");
    if ($check > 0)
        return true;
    return false;
}

function check_email($email) {
    $check_exists = db_num_rows("SELECT * FROM `tbl_user` WHERE `email` = '$email'");
    if ($check_exists > 0)
        return true;
    return false;
}

function update_reset_token($data, $email) {
    db_update('tbl_user', $data, "`email`='$email'");
}

function check_reset_token($reset_token) {
    $check_exists = db_num_rows("SELECT * FROM `tbl_user` WHERE `reset_token` = '$reset_token'");
    if ($check_exists > 0)
        return true;
    return false;
}
function update_pass($data, $reset_token){
    db_update('tbl_user', $data, "'reset_token' = '{$reset_token}'");
}