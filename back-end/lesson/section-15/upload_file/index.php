<?php
if (isset($_FILES["input-file-name"])) {
    require '../library/data.php';
    show_arr($_FILES);

#Tạo thư mục chứa file upload.
    $upload_dir = "uploads/";
#Tạo đường dẫn của file sau khi được upload.
    $upload_file = $upload_dir . $_FILES["input-file-name"]["name"];
#Chuyển file từ đường dẫn tạm thời sang đường dẫn sau khi được upload.
    if (move_uploaded_file($_FILES["input-file-name"]["tmp_name"], $upload_file)) {
        echo "upload file thành công.<br>";
        echo "<a href='$upload_file'> Download: {$_FILES['input-file-name']['name']} </a>";
    } else {
        echo "upload file không thành công.";
    }
}
?>
<html>
    <head>
        <title>upload file lên server vs PHP</title>
    </head>
    <body>
        <h1>upload file</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            <input type="file" name="input-file-name" /><br><br>
            <input type="submit" name="btn-upload" value="Upload file"/>
        </form>

    </body>
</html>

