<?php
$oddList = array();

for ($number = 3; $number <= 150; $number++) {
    if ($number % 2 != 0) {
        $oddList[] = $number;
    }
}

echo "<pre>";
print_r($oddList);
echo "</pre>";

echo "<br>";
echo "cách 2: ";
echo "<br>";

$odd_list = array();
$n = 3;
while ($n <= 150) {
    if($n % 2 == 1){
        $odd_list[] = $n;
    }
    $n++;
}
echo "<pre>";
print_r($odd_list);
?>;
