<?php
if (isset($_POST["btn-add"])) {
    echo "<pre>";
    print_r($_POST);
    echo "------------" . "<br>";

    if (empty($_POST["text-area"])) {
        echo "Bạn chưa thêm bài viết.";
    } else {
        $text = $_POST["text-area"];
        echo $text;
    }
}
?>
<html>
    <head>
        <title>get data from textarea</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Vui lòng thêm bài viết </label><br>
            <textarea name="text-area" cols="50" rows="10"></textarea>
            <input  type="submit" name="btn-add" value="ADD">
        </form>

    </body>
</html>


