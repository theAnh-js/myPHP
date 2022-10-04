<?php

function show_arr($data){
    if(!empty($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }else{
        return false;
    }
}

