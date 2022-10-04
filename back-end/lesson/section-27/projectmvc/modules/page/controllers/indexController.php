<?php

function construct() {

}

function indexAction() {
    load_view('index');
}
function detailAction(){
    
    //mặc dù ko nhìn thấy url mặc định trên link thân thiện
    //nhưng ta vẫn có thể get được các value của các tham số trên link.
//    echo $_GET["slug"];
//        echo $_GET["id"];        
//        echo $_GET["mod"];        
//        echo $_GET["controller"];
//        echo $_GET["action"];
        
        load_view('index');
}
function addAction() {
}

function editAction() {
}
