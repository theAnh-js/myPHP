<?php

#tính tổng các số chẵn từ 1 đến n (n >= 2)

function T1($n) {
    $result = 0;
    if ($n < 2) {
        return 0;
    }
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $result += $i;
        }
    }
    return $result;
}

echo T1(4);
echo "<br>";

#tính tổng nghịch đảo các số chia hết cho 3 (n >= 3)

function T2($n) {
    $result = 0;
    if ($n >= 3) {
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0) {
                $result += 1 / $i;
            }
        }
    }
    return $result;
}

echo T2(6);

echo "<br>";

#tính tổng chuỗi n/n+1 (n>=1)

function T3($n) {
    if ($n < 1)
        return 0;
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        $result += $i / ($i + 1);
    }
    return $result;
}

echo T3(3);
echo "<br>";
#giải phương trình bậc 2

function T4($a, $b, $c) {
    if ($a == 0) {
        return null;
    }

    $denta = $b ** 2 - 4 * $a * $c;
    if ($denta < 0) {
        return "phuong trinh vo nghiem";
    }
    if ($denta == 0) {
        return "x1 = x2 = ".-$b/(2*$a);
    }
    return (-$b + sqrt($denta)) / (2 * $a) . "and" . (-$b - sqrt($denta)) / (2 * $a);
}
echo T4(4, -2, -6)."<br>";
echo T4(1, -4, 4)."<br>";
echo T4(0, 1,2);

