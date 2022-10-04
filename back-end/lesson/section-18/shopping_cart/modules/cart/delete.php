<?php

$id = (int)$_GET["id"];
//echo $id;
delete_by_id($id);

redirect("?mod=cart&act=show");
