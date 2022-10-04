<?php

function redirect($url) {
    if (!empty($url)) {
        return header("Location: {$url}");
    }
}
