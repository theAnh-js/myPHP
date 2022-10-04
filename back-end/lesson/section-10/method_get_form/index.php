<?php

//GET dữ liệu từ URL
$mod = $_GET["mod"];
$act = $_GET["act"];
$id = $_GET["id"];
echo "{$mod}-{$act}-{$id}";


//show ket qua form
function show_arr($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo"</pre>";
    }
}

if (isset($_GET["btn_search"])) {
    show_arr($_GET);
}
?>
<html>
    <head>
        <title>Truyền dữ liệu bằng phương thức GET</title>
    </head>
    <body>
        <a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
        <h1>Tìm </h1>
        <form action="" method="GET">
            Tìm kiếm: <input type='text' name='q'>
            <input type='submit' name='btn_search' value='Search'>
        </form>
    </body>
</html>

