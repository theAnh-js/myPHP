<?php
require '../library/data.php';
show_arr($_FILES);
  
#Tạo thư mục chứa file upload.
$upload_dir = "uploads/";
#Tạo đường dẫn của file sau khi được upload.
$upload_file = $upload_dir.$_FILES["input-file-name"]["name"];

if(move_uploaded_file($_FILES["input-file-name"]["tmp_name"], $upload_file)){
    echo "upload file thành công.<br>";
    echo "<a href='$upload_file'> Download: {$_FILES['input-file-name']['name']} </a>";
}else{
    echo "upload file không thành công.";
}
