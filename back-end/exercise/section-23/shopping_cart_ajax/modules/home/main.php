<?php get_header() ?>
<?php
#laptop
$cat_id_laptop = 2;
$list_laptop = get_list_product_by_cat_id($cat_id_laptop);
$info_cat_laptop = get_info_cat($cat_id_laptop);
#phone
$cat_id_phone = 1;
$list_phone = get_list_product_by_cat_id($cat_id_phone);
$info_cat_phone = get_info_cat($cat_id_phone);

?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sitebar() ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><a href="<?php echo $info_cat_laptop['url'] ?>"> <?php echo $info_cat_laptop["cat_title"] ?></a></h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_laptop)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_laptop as $laptop) { ?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?php echo $laptop["id"] ?>" title="" class="thumb">
                                        <img src="<?php echo $laptop["product_thumb"] ?>" alt="">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?php echo $laptop["id"] ?>" title="" class="title"><?php echo $laptop["product_title"] ?></a>
                                    <p class="price"><?php echo get_format_number($laptop["price"]) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><a href="<?php echo $info_cat_phone['url'] ?>"><?php echo $info_cat_phone["cat_title"] ?></a> </h3>
                </div>
                <div class="section-detail">
                    <?php if (!empty($list_phone)) { ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_phone as $phone) { ?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?php echo $phone["id"] ?>" title="" class="thumb">
                                        <img src="<?php echo $phone["product_thumb"] ?>" alt="">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?php echo $phone["id"] ?>" title="" class="title"><?php echo $phone["product_title"] ?></a>
                                    <p class="price"><?php echo get_format_number($phone["price"]) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <!--            <div class="section list-cat">
                            <div class="section-head">
                                <h3 class="section-title">Máy tính bảng</h3>
                            </div>
                            <div class="section-detail">
                                <ul class="list-item clearfix">
                                    <li>
                                        <a href="?page=detail_product" title="" class="thumb">
                                            <img src="public/images/img-product.png" alt="">
                                        </a>
                                        <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                        <p class="price">5.000.000đ</p>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
        </div>
    </div>
</div>
<?php get_footer() ?>
