<?php
if (isset($_POST["btn-add"])) {
    if (!empty($_POST["cat"])) {
        echo "<pre>";
        print_r($_POST["cat"]);

        #cách xử lý 1:
        foreach ($_POST["cat"] as $item) {
            echo $item . "<br>";
        }
        echo "<br>";
        #cách xử lý 2:
        $list_str_item = implode(",", $_POST["cat"]);
        echo $list_str_item;
    }
}
?>

<html>
    <head>
        <title>get data from list of checkbox</title>
    </head>
    <body>
        <h1>Chọn danh mục</h1>
        <form action="" method="POST">
            <input type="checkbox" name="cat[]" value="1" id="cat_1">
            <label for="cat_1">Thể thao</label> <br>

            <input type="checkbox" name="cat[]" value="2" id="cat_2">
            <label for="cat_2">Xã hội</label><br><br>

            <input type="submit" name="btn-add" value="Thêm bài ">
        </form>

    </body>
</html>


