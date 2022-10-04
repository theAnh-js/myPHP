<?php
$post_list = array(
    1 => array(
        "id" => 1,
        "title" => "Việt Nam nêu lập trường về vấn đề Đài Loan",
        "author" => "Châu Như Quỳnh",
        "time" => "Thứ năm, 11/08/2022 - 17:23 ",
        "singular-sapo" => '(Dân trí) - "Lập trường của Việt Nam về vấn đề Đài Loan là nhất quán. Trên cơ sở kiên trì nguyên tắc một Trung Quốc, Việt Nam mong muốn các bên kiềm chế, không làm gia tăng căng thẳng" - bà Lê Thị Thu Hằng nói.',
        "singular-content" => "Chiều 11/8, tại cuộc họp báo thường kỳ Bộ Ngoại giao, các cơ quan truyền thông quan tâm đặc biệt tới ",
        "img" => "https://icdn.dantri.com.vn/thumb_w/680/2022/07/07/2896609213679162386151532923164760973158024n-1657188674718.jpg",
        "content" => "Theo bà Hằng, Mỹ và Trung Quốc đều là các cường quốc và đối tác quan trọng hàng đầu của Việt Nam. Quan hệ hai nước có ảnh hưởng đến hòa bình, ổn định và thịnh vượng trên phạm vi toàn cầu.",
    ),
    2 => array(
        "id" => 2,
        "title" => "Việt Nam nêu lập trường về vấn đề Đài Loan",
        "author" => "Châu Như Quỳnh",
        "time" => "Thứ năm, 11/08/2022 - 17:23 ",
        "singular-sapo" => '(Dân trí) - "Lập trường của Việt Nam về vấn đề Đài Loan là nhất quán. Trên cơ sở kiên trì nguyên tắc một Trung Quốc, Việt Nam mong muốn các bên kiềm chế, không làm gia tăng căng thẳng" - bà Lê Thị Thu Hằng nói.',
        "singular-content" => "Chiều 11/8, tại cuộc họp báo thường kỳ Bộ Ngoại giao, các cơ quan truyền thông quan tâm đặc biệt tới ",
        "img" => "https://icdn.dantri.com.vn/thumb_w/680/2022/07/07/2896609213679162386151532923164760973158024n-1657188674718.jpg",
        "content" => "Theo bà Hằng, Mỹ và Trung Quốc đều là các cường quốc và đối tác quan trọng hàng đầu của Việt Nam. Quan hệ hai nước có ảnh hưởng đến hòa bình, ổn định và thịnh vượng trên phạm vi toàn cầu.",
    ),
    3 => array(
        "id" => 3,
        "title" => "Việt Nam nêu lập trường về vấn đề Đài Loan",
        "author" => "Châu Như Quỳnh",
        "time" => "Thứ năm, 11/08/2022 - 17:23 ",
        "singular-sapo" => '(Dân trí) - "Lập trường của Việt Nam về vấn đề Đài Loan là nhất quán. Trên cơ sở kiên trì nguyên tắc một Trung Quốc, Việt Nam mong muốn các bên kiềm chế, không làm gia tăng căng thẳng" - bà Lê Thị Thu Hằng nói.',
        "singular-content" => "Chiều 11/8, tại cuộc họp báo thường kỳ Bộ Ngoại giao, các cơ quan truyền thông quan tâm đặc biệt tới ",
        "img" => "https://icdn.dantri.com.vn/thumb_w/680/2022/07/07/2896609213679162386151532923164760973158024n-1657188674718.jpg",
        "content" => "Theo bà Hằng, Mỹ và Trung Quốc đều là các cường quốc và đối tác quan trọng hàng đầu của Việt Nam. Quan hệ hai nước có ảnh hưởng đến hòa bình, ổn định và thịnh vượng trên phạm vi toàn cầu.",
    ),
);

function checkInput($arr) {
    return is_array($arr) && !empty($arr);
}
?>


<html>
    <head>
        <title>posts</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
        if (checkInput($post_list)) {
            ?>

            <?php
            foreach ($post_list as $index => $post) {
                ?>

                <div class="post">
                    <h1 class="post_title"><?php echo $post["title"]; ?></h1>
                    <div class="post_author">
                        <div class="post_author-name"> <strong><?php echo $post["author"]; ?></strong></div>
                        <span class="post_author-time"><?php echo $post["time"] ?></span>
                    </div>
                    <h2 class="post_singular-sapo"> <?php echo $post["singular-sapo"]; ?></h2>
                    <p class="post_singular-content"> <?php echo $post["singular-content"]; ?></p>
                    <img src=" <?php echo $post["img"] ?>" alt="alt" class="post_image"/>
                    <p class="post_content"><?php echo $post["content"]; ?></p>
                </div>

                <?php
            }
            ?>

            <?php
        } else {
            ?>

            <p>Dữ liệu không tồn tại.</p>

        <?php }
        ?>

    </body>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html{
            font-size: 62.5%;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            font-size: 1.8rem;
        }
        img{
            display: block;
            width: 100%;
        }

        .post{
            margin: 2rem auto;
            padding: 1.6rem;
        }
        .post_author{
            margin: 1.2rem 0 0;
            font-size: 1.4rem;
            display: flex;
        }
        .post_author-name{
            margin-right: 7px;
        }
        .post_author-time{
            padding-left: 7px;
            position: relative;
        }
        .post_author-time:before{
            content: "";
            display: block;
            width: 4px;
            height: 4px;
            border-radius: 4px;
            background-color: #222;

            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        .post_singular-sapo{
            margin: 3.2rem 0;
        }
        .post_singular-content, .post_content{
            margin: 0 0 2rem;
        }
        .post_content{
            margin-top: 2rem;
        }
    </style>
</html>

