<?php

$id = (int) $_GET["id"];

if (isset($_POST["btn-add"])) {
    $error_list = array();
    #fullname
    if (empty($_POST["fullname"])) {
        $error_list["fullname"] = "Vui lòng nhập họ và tên.";
    } else {
        $fullname = $_POST["fullname"];
    }
    #gender
    if (empty($_POST["gender"])) {
        $error_list["gender"] = "Vui lòng chọn giới tính.";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($error_list)) {
        $my_sql = "UPDATE `tbl_user` SET `fullname`='{$fullname}', `gender`='{$gender}' WHERE `id` = {$id}";
        if (mysqli_query($conn, $my_sql)) {
            echo "Cập nhật thành công";
        } else {
            echo "Error!" . mysqli_error($conn);
        }
    }
    
}
$sql = "SELECT * FROM `tbl_user` WHERE `id`={$id}";
$result = mysqli_query($conn, $sql);
//show_arr($result);
$item = mysqli_fetch_assoc($result);

//show_arr($item);
?>

<?php get_header() ?>
<div id="content">
    <div class="form-wrapper">
        <form action="" method="POST">
            
            <div>
                <label for="fullname">Họ và tên</label>
                <input type="text" name="fullname" id="fullname" value="<?php if(!empty($item["fullname"])) echo $item["fullname"] ?>"/>
                <span><?php if (!empty($error_list["fullname"])) echo $error_list["fullname"]; ?></span>
            </div>
            
            <div>
                <label>Giới tính</label>
                <select name="gender">
                    <option value="">--Tùy chọn--</option>
                    <option value="male" <?php if(isset($item["gender"]) && $item["gender"] == "male") echo "selected" ?>>Nam</option>            
                    <option value="female"<?php if($item["gender"] == "female") echo "selected" ?>>Nữ</option>
                </select>
                <span><?php if (!empty($error_list["gender"])) echo $error_list["gender"]; ?></span>
            </div>
            <input type="submit" name="btn-add" value="Submit"/>
        </form>
    </div>
</div>
<?php get_footer() ?>
<style>

    .form-wrapper div{
        margin-bottom: 15px;
    }
    span{
        color: red;
        font-size: 12px;
    }
</style>


