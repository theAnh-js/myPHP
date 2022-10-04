<?php
function is_login(){
    if(isset($_SESSION["is_login"])) return true;
    return false;
}

function user_login(){
    if(!empty($_SESSION["user_login"])){
        return $_SESSION["user_login"];
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


