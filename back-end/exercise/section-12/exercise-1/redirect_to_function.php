<?php

function redirect_to($location) {
    if (!empty($location)) {
        return header("Location: {$location}");
    }else{
        return false;
    }
}

redirect_to("demo.php");
?>

