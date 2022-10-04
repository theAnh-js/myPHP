
<?php get_header("product") ?>

<div id="content">
    <h1 class="heading-content">Danh sách sản phẩm.</h1>
    
    <?php $product = $_GET["cat_id"]; 
        echo $product;
    ?>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna 
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit 
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
        occaecat cupidatat non proident, sunt in culpa qui officia 
        deserunt mollit anim id est laborum.</p>
</div>
<?php get_footer("product") ?>
