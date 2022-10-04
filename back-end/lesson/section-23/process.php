<?php

#num_order và price ở POST đây là key trong data bên app.js
$num_order = $_POST["num_order"];
$price = $_POST["price"];
$total = $num_order * $price;

$result = array(
    "num_order" => $num_order,
    "price" => $price,
    "total" => $total,
);

#kết quả của echo sẽ được success bên app.js nhận.
//echo $num_order * $price; (đây là khi dataType là text, còn nếu là json thì dùng json_encode)

echo json_encode($result);


