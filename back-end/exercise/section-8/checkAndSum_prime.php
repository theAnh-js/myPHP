<?php

function check_prime($n) {
    if ($n < 2 || !is_numeric($n))
        return false;

//    for ($i = 2; $i < $n; $i++) {
//        if ($n % $i == 0)
//            return false;
//    }
    //cách2:
     for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0)
            return false;
    }

    return true;
}

function sum_prime($number) {
    $total = 0;

    for ($i = 0; $i <= $number; $i++) {
        if(check_prime($i)){
            $total += $i;
        }
    }
    
    return $total;
}
echo sum_prime(2);
echo "<br>";
echo sum_prime(10);
echo "<br>";
echo sum_prime(100);
echo "<br>";