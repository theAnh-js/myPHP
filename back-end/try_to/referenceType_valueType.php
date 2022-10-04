<?php

$a = 1;
function increase($a){
    $a += 1;
    return $a;
}
echo increase($a);
echo "<br>";
echo $a;
echo "<br>";

echo "------------------------<br>";
#biến tham số thành kiểu tham chiếu.
$x = 1;
function increasing(&$x){
    $x += 1;
    return $x;
}
echo increasing($x);
echo "<br>";
echo $x;

