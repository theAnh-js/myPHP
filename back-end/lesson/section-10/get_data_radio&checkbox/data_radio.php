<?php
if (isset($_POST["btn-register"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo"--------------------------------";
    echo"<br>";

    $genderList = array(
        "male" => "Nam",
        "female" => "Nữ",
    );
    if (empty($_POST["gender"])) {
        echo "Vui lòng chọn giới tính của bạn.";
    } else {
        $gender = $_POST["gender"];
        echo $genderList[$gender];
    }
}
?>
<html>
    <head>
        <title>data radio</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Nam</label><br>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Nữ</label><br>            
            <input type="submit" name="btn-register" value="Register">
        </form>


    </body>
</html>

