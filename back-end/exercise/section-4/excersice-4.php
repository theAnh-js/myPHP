<?php

echo "<pre>";
$family_member = array(
    "father" => array(
        "fullname" => "luong thanh A",
        "age" => 45,
    ),
    "mother" => array(
        "fullname" => "nguyen thi B",
        "age" => 47,
    ),
    "brother" => array(
        "fullname" => "luong van C",
        "age" => 20,
    ),
    "me" => array(
        "fullname" => "luong the D",
        "age" => 23,
    )
);
print_r($family_member);
echo "</pre>";

echo "<pre>";
$product_list = array("product_name" => "iphone15", "price" => "100usd", "color" => "yellow");
print_r($product_list);
echo "</pre>";

$fullname = $family_member['me']['fullname'];
$bornYear = 1999;
$weight = 60;
echo "I am <strong> {$fullname} </strong>";
echo "<br>";
echo "I was born in <strong> {$bornYear} </strong>";
echo "<br>";
echo "I weigh <strong> {$weight}kg </strong>";


