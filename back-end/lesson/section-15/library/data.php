<?php

function show_arr($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }else{
        echo "Xảy ra lỗi!";
    }
}

