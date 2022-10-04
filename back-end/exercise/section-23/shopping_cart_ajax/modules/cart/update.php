<?php

if (isset($_POST["btn_update_cart"])) {
    update_quantity($_POST["quantity"]);
    redirect("?mod=cart&act=show");
}

