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

function get_post_by_id($id) {
    global$post_list;
    if (is_numeric($id) && array_key_exists($id, $post_list)) {
        return $post_list[$id];
    }
}
echo "<pre>";
$post = get_post_by_id(3);
print_r($post);
echo "</pre>"
?>