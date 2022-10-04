<?php

function get_format_number($number, $unit="đ"){
    return number_format($number).$unit;
}

