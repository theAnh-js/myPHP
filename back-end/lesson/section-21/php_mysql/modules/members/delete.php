<?php

$id = (int) $_GET["id"];

$sql = "DELETE FROM `tbl_user` WHERE `id`={$id}";
if(mysqli_query($conn, $sql)){
    redirect("?mod=members&act=main");
}else{
    echo "Error: ".mysqli_error($conn);
}
