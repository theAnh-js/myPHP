<?php

function calcNumPage($total_rows, $num_per_page){
    return ceil($total_rows/$num_per_page);
}
echo calcNumPage(10, 3);

