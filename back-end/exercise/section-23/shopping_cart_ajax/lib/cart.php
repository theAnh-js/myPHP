<?php

function add_cart($id) {
    #Vì mình cho vào hàm nên cần để $list_product là global mới truy xuất vào được.
    global $list_product;

    $item = get_item_by_id($id);
#lấy số lượng sản phẩm.
    $quantity = 1;
    if (isset($_SESSION["cart"]) && array_key_exists($id, $_SESSION["cart"]["buy"])) {
        $quantity = $_SESSION["cart"]["buy"][$id]["quantity"] + 1;
    }
#Lưu thông tin sản phẩm vào session.
    $_SESSION["cart"]["buy"][$id] = array(
        "id" => $item["id"],
        "url" => $item["url"],
        "product_title" => $item["product_title"],
        "price" => $item["price"],
        "code" => $item["code"],
        "product_desc" => $item["product_desc"],
        "product_thumb" => $item["product_thumb"],
        "quantity" => $quantity,
        "sub_total" => $quantity * $item["price"],
    );
    #Vì session là global sẵn nên hàm này ko cần return, kq xử lý vẫn đk lưu.
    #sau khi add, cần cập nhập lại giỏ hàng.
    update_cart();
}

function update_cart() {
    #Lấy tổng thông tin đơn hàng.
    $num_order = 0;
    $total = 0;
    if (isset($_SESSION["cart"])) {
        foreach ($_SESSION["cart"]["buy"] as $item) {
            $num_order += $item["quantity"];
            $total += $item["sub_total"];
        }
    }

    $_SESSION["cart"]["info"] = array(
        "num_order" => $num_order,
        "total" => $total,
    );
    
    
}

function get_list_buy_cart() {

    if (isset($_SESSION["cart"])) {
        foreach ($_SESSION["cart"]["buy"] as &$item) {
            $item["url_delete_cart"] = "?mod=cart&act=delete&id={$item["id"]}";
            #cần cập nhập lại $item như dưới hoặc thêm & vào tham số $item(thành tham chiếu).
            //$_SESSION["cart"]["buy"][$item["id"]] = $item;
        }
        return $_SESSION["cart"]["buy"];
    }
    return false;
}

function get_num_order() {
    if (isset($_SESSION["cart"])) {
        return $_SESSION["cart"]["info"]["num_order"];
    }
    return false;
}

function get_total() {
    if (isset($_SESSION["cart"])) {
        return $_SESSION["cart"]["info"]["total"];
    }
}

function delete_by_id($id = "") {
    if (isset($_SESSION["cart"])) {
        if (!empty($id)) {
            unset($_SESSION["cart"]["buy"][$id]);
            #nhớ là cần cập nhập lại giỏ hàng, nếu ko tổng đơn hàng và tổng tiền ko được thay đổi.
            update_cart();
        } else {
            unset($_SESSION["cart"]);
        }
    }
}

function update_quantity($quantity) {
    if (!empty($quantity)) {
        foreach ($quantity as $id => $new_quantity) {
            $_SESSION["cart"]["buy"][$id]["quantity"] = $new_quantity;
            $_SESSION["cart"]["buy"][$id]["sub_total"] = $new_quantity * $_SESSION["cart"]["buy"][$id]["price"];
        }
        update_cart();
    }
}
