<?php

function get_header() {
    $path_header = 'include/header.php';
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "Không tồn tại đường dẫn {$path_header}";
    }
}

function get_footer() {
    $path_footer = "include/footer.php";
    if (file_exists($path_footer)) {
        require 'include/footer.php';
    } else {
        echo "Không tồn tại đường dẫn {$path_footer}";
    }
}
