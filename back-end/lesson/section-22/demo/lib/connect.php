<?php 
    $conn = mysqli_connect("localhost", "root", "", "myData");
    if(!$conn){
        echo "Kết nối không thành công".mysqli_connect_errno();
        die(); // lỗi là dừng chương trình luôn.
    }
//    else{
//        echo "Kết nối thành công.";
//    }
?>
