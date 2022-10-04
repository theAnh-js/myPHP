<?php

function make_input($type, $name, $value, $option = array()) {
//    $type = func_get_arg(0);
//    $name = func_get_arg(1);
//    $value = func_get_arg(2);
    if (!empty($option)) {
        $id = $option["id"];
        $class = $option["class"];
    }

    $input_html = "<input type = '{$type}' name='' value='' id='{$id}' class='{$class}' />";
    echo $input_html;
}

make_input("text", "", "", $info = array("id" => 1, "class" => "text-input"));
echo "<br>";
make_input("checkbox", "", "", $info = array("id" => 2, "class" => "checkbox-input"));

?>

