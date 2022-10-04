 <?php

//echo "index model is called";
function get_list_user(){
    $result = db_fetch_array("SELECT * FROM `tbl_user`");
    return $result;
}

function get_user_by_id($id){
    $user = db_fetch_row("SELECT * FROM `tbl_user` WHERE `id` = {$id}");
    return $user;
}