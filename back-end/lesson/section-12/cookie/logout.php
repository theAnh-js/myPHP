<?php

setcookie("is_login", true, time() - 3600);
setcookie("user_login", "luong the anh", time() - 3600);

header("Location: login.php");
