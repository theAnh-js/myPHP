
<?php get_header("product") ?>

<?php
    $cat_id = (int)$_GET["cat_id"];
    $page_id = (int)$_GET["page"];
    
    $url = get_page_by_id($cat_id, $page_id);
?>

<div id="content">
    <style>
        .pagging-list{
            margin: 0;
            padding: 0;
            margin-top: 300px;
            text-align: center;
        }
        .pagging-item{
            list-style-type: none;
            display: inline-block;
            margin-left: 10px;
            height: 30px;
            width: 30px;
            border-radius: 30px;
            position: relative;
        }
        .pagging-item a{
            text-decoration: none;
            color: blue;
            font-size: 18px;
            display: block;
            padding: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .pagging-item:hover{
            cursor: pointer;
            background-color: deepskyblue;
        }
    </style>

    <h1 class="heading-content">Danh sách sản phẩm.</h1>

    <?php
    $product = $_GET["cat_id"];
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


    <div class="pagging">
        <ul class="pagging-list">
            <li class="pagging-item"><a href="?mod=product&act=main&cat_id=<?php echo $cat_id ?>&page=1">1</a></li>            
            <li class="pagging-item"><a href="?mod=product&act=main&cat_id=<?php echo $cat_id ?>&page=2">2</a></li>
            <li class="pagging-item"><a href="?mod=product&act=main&cat_id=<?php echo $cat_id ?>&page=3">3</a></li>
            <li class="pagging-item"><a href="?mod=product&act=main&cat_id=<?php echo $cat_id ?>&page=4">4</a></li>
            <li class="pagging-item"><a href="?mod=product&act=main&cat_id=<?php echo $cat_id ?>&page=5">5</a></li>
        </ul>
    </div>
</div>
<?php get_footer("product") ?>
