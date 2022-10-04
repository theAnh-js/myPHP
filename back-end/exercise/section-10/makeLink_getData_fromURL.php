<?php 
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    echo "---------------"."<br>";
    
    foreach($_GET as $item){
        echo $item."<br>";
    }
?>
<html>
    <head>
        <title>get data from url</title>
    </head>
    <body>

        <a href="?mod=product&act=main">Sản phẩm</a>

    </body>
</html>


