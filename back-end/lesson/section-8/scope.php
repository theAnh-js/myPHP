<?php

$a = 10;
$b = 20;
function sum(){
    global $a,$b;
    return $a + $b;
}
echo sum();
