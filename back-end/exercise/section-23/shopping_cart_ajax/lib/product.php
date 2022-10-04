<?php

function get_info_cat($cat_id) {
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        $list_product_cat[$cat_id]["url"] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_product_cat[$cat_id];
    } else {
        return false;
    }
}

function get_list_product_by_cat_id($cat_id) {
    global $list_product;
    $each_product_list = array();

    foreach ($list_product as $item) {
        if ($item["cat_id"] == $cat_id) {
            $item["url"] = "?mod=product&act=detail&id={$item["id"]}";
            $each_product_list[] = $item;
        }
    }
    return $each_product_list;
}

function get_item_by_id($id) {
    global $list_product;
    if (array_key_exists($id, $list_product)) {
        $list_product[$id]["url_to_cart"] = "?mod=cart&act=add&id={$id}";
        $list_product[$id]["url"] = "?mod=product&act=detail&id={$id}";

        return $list_product[$id];
    }
}

