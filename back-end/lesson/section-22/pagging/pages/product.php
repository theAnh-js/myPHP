<div id="content">
    <h1 class="heading-content">PRODUCT</h1>

    <?php 
        $path_product = "data/generate_productList.php";
        if(file_exists($path_product)){
            require $path_product;
        }else{
            echo "Trang này chưa cập nhật nội dung.";
        }
    ?>
</div>