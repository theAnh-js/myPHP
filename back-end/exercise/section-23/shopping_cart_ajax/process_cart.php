<?php

$pro_price = $_POST["pro_price"];
$num_order = $_POST["num_order"];

$sub_total = $pro_price * $num_order;

$result = array(
    "pro_price" => $pro_price,
    "num_order" => $num_order,
    "sub_total" => $sub_total,
);

//echo json_encode($result);
echo $sub_total;


