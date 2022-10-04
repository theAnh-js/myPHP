<?php
$productList = array(
    1 => array(
        "id" => 1,
        "image" => "https://salt.tikicdn.com/cache/280x280/ts/product/ac/c0/88/d342ae1c9f92390bb4869a3c24c0c083.jpg.webp",
        "description" => "Giày thể thao Nam Biti's Hunter Running DSMH03900",
        "price" => "960.000",
    ),
    2 => array(
        "id" => 2,
        "image" => "https://salt.tikicdn.com/cache/280x280/ts/product/5c/6f/29/b98d469b11e6cb7a5fed56304b7d1b2e.jpg.webp",
        "description" => "Giày Thể Thao Nam Biti's Hunter Street Z Collection High White DSMH06200TRG (Trắng)",
        "price" => "773.000",
    ),
    3 => array(
        "id" => 3,
        "image" => "https://salt.tikicdn.com/cache/280x280/ts/product/ac/c0/88/d342ae1c9f92390bb4869a3c24c0c083.jpg.webp",
        "description" => "Giày thể thao Nam Biti's Hunter Running DSMH03900",
        "price" => "960.000",
    ),
    4 => array(
        "id" => 4,
        "image" => "https://salt.tikicdn.com/cache/280x280/ts/product/5c/6f/29/b98d469b11e6cb7a5fed56304b7d1b2e.jpg.webp",
        "description" => "Giày Thể Thao Nam Biti's Hunter Street Z Collection High White DSMH06200TRG (Trắng)",
        "price" => "773.000",
    ),
);

function checkArr($arr) {
    return is_array($arr) && !empty($arr);
}
?>
<html>
    <head>
        <title>shoes shop</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <?php if (checkArr($productList)) { ?>
            <div class="product-wrap">
                <?php foreach ($productList as $product) { ?>
                    <div class="product">
                        <img src="<?php echo $product['image'] ?>" alt="alt" class="product_img"/>
                        <h3 class="product_desc"> <?php echo $product["description"]; ?></h3>
                        <span class="product_price"> <?php echo $product["price"]; ?></span>
                    </div>
                <?php } ?>
            </div>

        <?php } else { ?>
            <p>Dữ liệu không tồn tại.</p>
        <?php } ?>


    </body>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html{
            font-size: 62.5%;
            font-family: Arial,Helvetica, sans-serif;
        }
        body{
            font-size: 1.6rem;
            background-color: #eee;
        }
        img{
            width: 100%;
            display: block;
        }
        .product-wrap{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin-left: -1.2rem;
            margin: 0 1rem;
        }
        .product{
            width: calc(25% - 1.2rem);
            object-fit: cover;
            margin:1.6rem 0 1.6rem 1.2rem;
            padding: 1.2rem 1.6rem;
            background-color: white;

        }
        .product:hover{
            cursor: pointer;
        }
        .product_desc{
            font-weight: 400;
            line-height: 2rem;
            font-size: 1.3rem;
            margin: 4px 0;
        }
        .product_price{
            color: #000;
            font-weight: bold;
        }

    </style>
</html>


