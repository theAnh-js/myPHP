<?php

$integerList = array(1,2,3,4,5,6,7,7,8,9,10);

function generateEvenInteger($arr){
    if(!is_array($arr)) return;
    
    $evenIntegerList = array();
    foreach($arr as $value){
        if($value % 2 == 0){
            $evenIntegerList[] = $value;
        }
    }
    return $evenIntegerList;
}

echo "<pre>";
print_r(generateEvenInteger($integerList));
echo "</pre>";
