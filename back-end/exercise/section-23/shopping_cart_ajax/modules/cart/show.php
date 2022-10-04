<?php
get_header();
?>

<?php
$list_buy = get_list_buy_cart();
//show_arr($list_buy);
?>

<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php if (!empty($list_buy)) { ?>

            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <form action="?mod=cart&act=update" method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_buy as $item) { ?>
                                    <tr>
                                        <td><?php echo $item["code"] ?></td>
                                        <td>
                                            <a href="<?php echo $item["url"] ?>" title="" class="thumb">
                                                <img src="<?php echo $item["product_thumb"] ?>" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo $item["url"] ?>" title="<?php echo $item["product_title"] ?>" class="name-product"><?php echo $item["product_title"] ?></a>
                                        </td>
                                        <td id="pro_price"><?php echo ($item["price"]) ?></td>
                                        <td>
                                            <input id="num_order" type="number" min="1" max="10" name="quantity[<?php echo $item["id"]?>]" value="<?php echo $item["quantity"] ?>" class="num-order">
                                        </td>
                                        <td id="sub_total"><?php echo get_format_number($item["sub_total"]) ?></td>
                                        <td>
                                            <a href="<?php echo $item["url_delete_cart"] ?>" title="Xóa sản phẩm" class="del-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo get_format_number(get_total()); ?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <input type="submit" id="update-cart" name="btn_update_cart" value="Cập nhật giỏ hàng"/>
                                                <a href="?mod=cart&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>

                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                    <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                    <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
        <?php } else { ?>
            <div id="cart-empty">
                <p>Chưa có sản phẩm trong giỏ hàng.</p>
                <p>Vui lòng chọn sản phẩm bạn ưa thích tại <a href="?mod=home&act=main">Trang chủ</a></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer() ?>