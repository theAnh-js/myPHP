<?php

function get_pagging($page, $total_page, $url = "") {
    if (empty($page) || empty($total_page) || empty($url))
        return;

    $str_pagging = "<div class='pagging'><ul class='pagging-list'>";
    if ($page > 1) {
        $prev = $page - 1;
        $str_pagging .= "<li class='pagging-item'><a href='$url{$prev}'><<</a></li>";
    }
    for ($i = 1; $i <= $total_page; $i++) {
        $active = "";
        if($i == $page){
            $active = "active";
        }
        $str_pagging .= "<li class='pagging-item {$active}'><a href='$url{$i}'>{$i}</a></li>";
    }
    if ($page < $total_page) {
        $next = $page + 1;
        $str_pagging .= "<li class='pagging-item'><a href='$url{$next}'>>></a></li>";
    }
    $str_pagging .= "</ul></div>";

    return $str_pagging;
}

//    <div class="pagging">
//        <ul class="pagging-list">
//            <li class="pagging-item"><a href=""><<</a></li>             
//            <li class="pagging-item"><a href="?mod=members&act=main&page=1">1</a></li>            
//            <li class="pagging-item"><a href="?mod=members&act=main&page=2">2</a></li>
//            <li class="pagging-item"><a href="?mod=members&act=main&page=3">3</a></li>
//            <li class="pagging-item"><a href="?mod=members&act=main&page=4">4</a></li>            
//            <li class="pagging-item"><a href="?mod=members&act=main&page=5">5</a></li>
//            <li class="pagging-item"><a href="">>></a></li>
//        </ul>
//    </div>
