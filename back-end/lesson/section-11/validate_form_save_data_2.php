<?php
if (isset($_POST["btn-register"])) {
    $errorList = array();

    if (empty($_POST["fullname"])) {
        $errorList["fullname"] = "Vui lòng nhập trường này.";
    } else {
        $fullname = $_POST["fullname"];
    }

    if (empty($_POST["gender"])) {
        $errorList["gender"] = "Vui lòng nhập trường này.";
    } else {
        $gender = $_POST["gender"];
    }
    
    if(empty($errorList)){
        echo "Fullname: {$fullname} - Gender: {$gender}";
    }
}
?>

<html>
    <head>
        <title>validate_form_save_data_2</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="fullname">Họ và tên </label>
            <input type="text" name="fullname" id="fullname" value="<?php if(!empty($fullname)) echo $fullname ?>"><br>
            <p><?php if(!empty($errorList["fullname"]))echo $errorList["fullname"]; ?></p>

            <label>Giới tính</label>
            <select name="gender">
                <option value="">--Tùy chọn--</option>
                <option value="male" <?php if(!empty($gender)&&($gender == "male")) echo "selected='selected'" ?>>Nam</option>                
                <option value="female" <?php if(!empty($gender) && $gender == "female") echo "selected='selected'" ?>>Nữ</option>
            </select>
            <p><?php if(!empty($errorList["gender"]))echo $errorList["gender"]; ?></p>
            <br><br><br>

            <input type="submit" name="btn-register" value="Register">

        </form>

    </body>
    <style>
        p{
            color: red;
            font-size: 10px;
            margin-bottom: 10px;
        }
    </style>
</html>

