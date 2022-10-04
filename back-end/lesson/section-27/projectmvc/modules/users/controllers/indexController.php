<?php

function construct() {

//    echo "DÙng chung, losad đầu tiên";
    load_model('index');// nếu chỉ dùng nó ở phạm vi hẹp thì đến hàm dùng nó mới gọi. 
}

function indexAction() {
//    load_model("index"); vì đã gọi ở hàm construc nên phía dưới không cần gọi nữa.
    $list_user = get_list_user();
//    show_array($list_user);
    $data["list_user"] = $list_user;
    $data["v"] = "vvvvvv";
    load_view("index", $data);
}

function addAction() {
    echo "Thêm dữ liệu";
}

function editAction() {
    $id = (int) $_GET["id"];
    $user = get_user_by_id($id);
    show_array($user);
}
 