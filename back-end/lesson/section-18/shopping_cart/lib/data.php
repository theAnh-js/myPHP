<?php

function show_arr($data){
    if(!empty($data) && is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

