<?php

ob_start();
session_start();

$_SESSION["is_login"] = true;
$_SESSION["username"] = "theAnhjs";

header("Location: index.php");
?>

