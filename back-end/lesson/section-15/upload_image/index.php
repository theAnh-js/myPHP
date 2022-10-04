<?php
if (isset($_FILES["input-file-name"])) {
    require '../library/data.php';
    show_arr($_FILES);
    
    #Tạo folder chứa ảnh.
    $upload_dir = "uploads/";
    $upload_file = $upload_dir . $_FILES["input-file-name"]["name"];

    #Xử lý đúng đuôi của file ảnh hay chưa.
    $image_type_list = array("png", "jpg", "gif", "jpeg");
    $type = pathinfo($_FILES["input-file-name"]["name"], PATHINFO_EXTENSION);
    echo "File được upload có đuôi là: " . $type . "<br>";
    $error_list = array();
    if (!in_array(strtolower($type), $image_type_list)) {
        $error_list["error-type"] = "File ảnh cần có đuôi là png, jpg, gif hoặc jpeg";
    } else {
        #Xử lý file được upload có dưới 20MB hay không. (20MB ~= 21000000Byte)
        if ($_FILES["input-file-name"]["size"] > 21000000) {
            $error_list["error-size"] = "Kích thước của file cần dưới 20MB.";
        }

        #Xử lý nếu file đã tồn tại trên hệ thống.
        if (file_exists($upload_file)) {
            $error_list["error-exists"] = "File đã tồn tại trên hệ thống.";
        }
    }

    if (empty($error_list)) {
        echo "File hợp lệ.<br><br>";
        if (move_uploaded_file($_FILES["input-file-name"]["tmp_name"], $upload_file)) {
            echo "upload file thành công.<br>";
            #Hiện thị ảnh luôn.
            echo "<img src='{$upload_file}'/>"."<br>";
            echo "<a href='{$upload_file}'> Download: {$_FILES['input-file-name']['name']} </a>";
        } else {
            echo "upload file không thành công.";
        }
    } else {
        echo"<pre>";
        print_r($error_list);
    }

#Tạo thư mục chứa file upload.
//    $upload_dir = "uploads/";
#Tạo đường dẫn của file sau khi được upload.
//    $upload_file = $upload_dir . $_FILES["input-file-name"]["name"]; 
#Chuyển file từ đường dẫn tạm thời sang đường dẫn sau khi được upload.
//    if (move_uploaded_file($_FILES["input-file-name"]["tmp_name"], $upload_file)) {
//        echo "upload file thành công.<br>";
//        echo "<a href='$upload_file'> Download: {$_FILES['input-file-name']['name']} </a>";
//    } else {
//        echo "upload file không thành công.";
//    }
}
?>
<html>
    <head>
        <title>upload image lên server vs PHP</title>
    </head>
    <body>
        <h1>upload image</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            <input type="file" name="input-file-name" /><br><br>
            <input type="submit" name="btn-upload" value="Upload image"/>
        </form>

    </body>
</html>

