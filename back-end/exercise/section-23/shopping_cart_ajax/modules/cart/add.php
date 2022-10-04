<?php

#Lấy thông tin sản phẩm được add.
$id = $_GET["id"];
add_cart($id);

//unset($_SESSION["cart"]);
//show_arr($_SESSION);
#Điều hướng sang show cart
redirect("?mod=cart&act=show");