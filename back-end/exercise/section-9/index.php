<?php
$post_list = array(
    1 => array(
        "id" => 1,
        "cat_title" => "Thể thao",
        "level" => 0,
    ),
    2 => array(
        "id" => 2,
        "cat_title" => "Châu Âu",
        "level" => 1,
    ),
    3 => array(
        "id" => 3,
        "cat_title" => "Châu Á",
        "level" => 1,
    ),
    4 => array(
        "id" => 4,
        "cat_title" => "Việt Nam",
        "level" => 2,
    ),
    5 => array(
        "id" => 5,
        "cat_title" => "Kinh tế",
        "level" => 0,
    ),
    6 => array(
        "id" => 6,
        "cat_title" => "Vi mô",
        "level" => 1,
    ),
    7 => array(
        "id" => 7,
        "cat_title" => "Vĩ mô",
        "level" => 1,
    ),
);
?>
<html>
    <head>
        <title>show post</title>
    </head>

    <body>
        <table width="25%">
            <thead>
                <tr align="left">
                    <th>STT</th>
                    <th>POST</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($post_list) && is_array($post_list)) { ?>

                    <?php foreach ($post_list as $index => $post) { ?>
                        <tr align="left">
                            <td> <?php echo $index; ?>  </td>
                            <td> <?php echo str_repeat("--", $post["level"]) . " " . $post["cat_title"] ?></td>
                        </tr>
                    <?php } ?>

                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
