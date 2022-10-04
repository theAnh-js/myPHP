
<?php
// khai báo và gán giá trị cho chuỗi.
$my_string = "I am learning PHP";
echo $my_string;
// 3 cách nối chuỗi với biến.
echo "Hello, {$my_string}, nice to meet you!";
echo "Hi, ".$my_string;
echo "Hey guys, $my_string";

// xuất dữ liệu kiểu mảng.
$my_arr = array("php", "javascript", "html/css");
echo"<pre>";
print_r($my_arr);
echo"</pre>";

?>
<html>
    <head>
        <title>learn php</title>;
        <meta charset="UTF-8">;
    </head>
    <body>
        <h1>I am <?php echo "LUONG THE ANH" ?></h1>;
        <style>
            h1{
                color: green;
            }
        </style>
    </body>
</html>

