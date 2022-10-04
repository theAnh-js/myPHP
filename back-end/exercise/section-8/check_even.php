<?php


function check_even($n){
    if(!is_int($n)) return "{$n} is not an integer number.";
    if($n % 2 == 0){
        return "{$n} is an even integer number.";
    }else{
        return "{$n} is an odd integer number.";
    }
}
echo check_even(2);
echo "<br>";
echo check_even(15);
echo "<br>";
echo check_even(10.30);