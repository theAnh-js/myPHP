<?php require 'lib/common_func.php' ?>

<!--header-->
<?php get_header() ?>
<div id="content">
    <h1 class="heading-content">NEWS</h1>

    <?php
    $path_post = 'data/generate_postArr.php';
    if (file_exists($path_post)) {
        require $path_post;
    } else {
        echo "Trang này chưa cập nhật nội dung.";
    }
    ?>
</div>
<!--footer-->
<?php get_footer() ?>