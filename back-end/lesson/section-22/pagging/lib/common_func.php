<?php

function get_header($ver = "") {
    if (!empty($ver)) {
        $path_header = "include/header-{$ver}.php";
    } else {
        $path_header = "include/header.php";
    }
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "Không tồn tại đường dẫn {$path_header}";
    }
}

function get_footer($ver = "") {
    if (!empty($ver)) {
        $path_footer = "include/footer-{$ver}.php";
    } else {
        $path_footer = "include/footer.php";
    }
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "Không tồn tại đường dẫn {$path_footer}";
    }
}
