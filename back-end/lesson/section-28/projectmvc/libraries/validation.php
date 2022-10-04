<?php

function show_error($field){
    global $error_list;
    if(!empty($error_list[$field])){
        return $error_list[$field];
    }
}

function show_value($field){
    if(!empty($_POST[$field])){
        return $_POST[$field];
    }
}
