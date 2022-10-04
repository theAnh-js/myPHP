<?php
$file_path = "uploads/image_6487327.JPG";
if(@unlink($file_path)){
    echo "Đã xóa file {$file_path} thành công.";
}else{
    echo "File cần xóa không tồn tại trên hệ thống.";
}

