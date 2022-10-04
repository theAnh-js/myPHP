<?php

$x = 12;
if($x > 0 && is_int($x) && $x % 2 == 0){
    $x++;
}
echo $x;
echo "<br>";
