<?php

function get_page_by_id($cat_id, $page_id){
    if(!empty($cat_id) && $cat_id = 1){
        return "?mod=pagging&act=page{$page_id}";
    }
}