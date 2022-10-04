<?php

#Danh mục sản phẩm.
//  id, cat_title
$list_product_cat = array(
    1 => array(
        "id" => 1,
        "cat_title" => "Điện thoại",
    ),
    2 => array(
        "id" => 2,
        "cat_title" => "Laptop",
    ),
    3 => array(
        "id" => 3,
        "cat_title" => "Tablet",
    ),
);

#Dữ liệu sản phẩm:
//  id, product_title, price, code, product_desc, product_thumb,
//  product_content, cat_id(id danh mục)
$list_product = array(
    1 => array(
        "id" => 1,
        "product_title" => "Điện thoại Samsung Galaxy A03 (3GB/32GB) - Hàng chính hãng",
        "price" => 2890000,
        "code" => "UNI#1",
        "product_desc" => "- Màn hình tràn viền vô cực Infinity-V 6,5inch hiển thị hình ảnh sống động và rực rỡ đến không ngờ. Công nghệ HD+ mang đến chất lượng hiển thị rõ ràng và sắc nét, cho bạn thỏa thích thưởng thức nội dung đỉnh cao mỗi ngày.",
        "product_thumb" => "https://salt.tikicdn.com/cache/280x280/ts/product/2c/50/bd/fba6e7981306512c14040e109f168751.jpg.webp",
        "product_content" => "<p>Những khoảnh khắc đáng nhớ trong cuộc sống sẽ được Samsung Galaxy A03 ghi lại rõ ràng với hệ thống camera kép 48MP chất lượng. Hình ảnh của bạn sẽ trở nên sắc nét, chi tiết hơn bao giờ. Độ phân giải lớn còn giúp chụp đêm tốt hơn. Bên cạnh đó, camera đo độ sâu 2MP, hỗ trợ xóa phông, giúp bạn có những tấm ảnh xóa phông hoàn hảo. Bạn cũng có thể sử dụng camera này để có những tấm ảnh chân dung thú vị."
        . "</p><img src='https://salt.tikicdn.com/cache/w750/ts/product/c4/5a/77/84f91f965a40d2d1ffea36bbc9809d19.jpg.webp' /><p></p>",
        "cat_id" => 1,
    ),
    2 => array(
        "id" => 2,
        "product_title" => "iPhone 13.Hệ thống camera kép tiên tiến nhất từng có trên iPhone.",
        "price" => "18990000",
        "code" => "UNI#2",
        "product_desc" => "Hệ thống camera kép tiên tiến nhất từng có trên iPhone. Chip A15 Bionic thần tốc. Bước nhảy vọt về thời lượng pin. Thiết kế bền bỉ. Mạng 5G siêu nhanh.",
        "product_thumb" => "https://salt.tikicdn.com/cache/750x750/ts/product/c2/95/b0/405e3bc7267cd545c76fd6eb93fa6045.png.webp",
        "product_content" => "<p>iPhone 13. Hệ thống camera kép tiên tiến nhất từng có trên iPhone. Chip A15 Bionic thần tốc. Bước nhảy vọt về thời lượng pin. Thiết kế bền bỉ. Mạng 5G siêu nhanh.<sup>1</sup> Cùng với màn hình Super Retina XDR sáng hơn.</p>"
        . "<p><img src='https://salt.tikicdn.com/cache/750x750/ts/product/51/8f/4d/22f01a90f24b7d02ec1c12c402644c1a.jpg.webp'/></p>",
        "cat_id" => 1,
    ),
    3 => array(
        "id" => 3,
        "product_title" => "Điện Thoại Oppo Reno 6Z 5G (8GB/128G) - Hàng Chính Hãng",
        "price" => 6490000,
        "code" => "UNI#3",
        "product_desc" => "Thiết kế thời thượng, đẳng cấp vượt trội",
        "product_thumb" => "https://salt.tikicdn.com/cache/280x280/ts/product/9c/b8/cd/892bfe75c4ea4532b076c1df2e2991c0.jpg",
        "product_content" => "<p><strong>Điện thoại Reno6 Z 5G</strong> sở hữu thiết kế vô cùng thời thượng. Các đường nét, chi tiết trên máy được trau chuốt hoàn hảo và cực kỳ hấp dẫn. Các khung viền bo cong uyển chuyển, mềm mại mang đến cho người dùng cảm giác êm tay khi cầm nắm. Ngoài ra, kích thước tổng thể của máy rất nhỏ gọn và thuận tiện để người dùng mang theo bên mình mọi nơi.</p>"
        . "<p><img src='https://salt.tikicdn.com/cache/w750/ts/tmp/ce/8f/51/b891d796fb47f7e1b9f1533df3726de2.jpg.webp'/></p>",
        "cat_id" => 1,
    ),
    4 => array(
        "id" => 4,
        "product_title" => "Laptop Lenovo Ideapad 3 - Hàng chính hãng",
        "price" => 12490000,
        "code" => "UNI#4",
        "product_desc" => "Laptop Lenovo Ideapad 3 14IML05 i3 (81WA00Q0VN) dành cho phân khúc laptop học tập - văn phòng với cấu hình ổn định và ngoại hình thanh lịch, phù hợp cho nhiều đối tượng người dùng.",
        "product_thumb" => "https://salt.tikicdn.com/cache/280x280/ts/product/92/c7/37/7eab63b8567d56515a44613534847081.png.webp",
        "product_content" => "<p>• Độc đáo với <strong>bản lề mở 180 độ</strong> cho phép sử dụng linh hoạt hơn, chia sẻ nội dung nhanh chóng khi làm việc nhóm và<strong> công tắc khoá camera </strong>giúp ngăn chặn tin tặc, kẻ xấu theo dõi bạn qua webcam.</p>"
        . "<p><img src='https://salt.tikicdn.com/cache/750x750/ts/product/8d/01/32/851cce469e3b309c84c6b33c66a42238.jpg.webp'></p>",
        "cat_id" => 2,
    ),
    5 => array(
        "id" => 5,
        "product_title" => "MacBook Air M1 13 inch 2020",
        "price" => 23200000,
        "code" => "UNI#5",
        "product_desc" => "Mạnh mẽ vươn tới thành công. Mà nhẹ bỗng.",
        "product_thumb" => "https://salt.tikicdn.com/cache/280x280/media/catalog/producttmp/1d/44/49/0df9a375e6af94274fdb4fa92ee004fb.jpg.webp",
        "product_content" => "<p>MacBook Air là máy tính xách tay mỏng và nhẹ nhất của Apple, siêu mạnh mẽ với chip M1. Tạo ra một bước đột phá về hiệu năng CPU và đồ họa, cùng với thời lượng pin lên đến 18 giờ.(<span>1)</span>&nbsp;Giúp bạn hoàn thành mọi khối lượng bài tập thật dễ dàng.</p>"
        . "<p><img src='https://salt.tikicdn.com/cache/750x750/ts/product/bc/32/da/a9ab7afa9f184e9a5daeb1a789aea217.jpg.webp'></p>",
        "cat_id" => 2,
    ),
    6 => array(
        "id" => 6,
        "product_title" => "Laptop Acer Aspire 7 A715-42G-R4ST(2021)(Hàng Chính Hãng)",
        "price" => 16190000,
        "code" => "UNI#6",
        "product_desc" => "Mẫu này được Acer hoàn thiện với chất liệu kim loại chắc chắn, bề mặt giả nhôm vân xước thời trang kết hợp đường viền Diamond Cut mạnh mẽ tạo nên sự ấn tượng trong thiết kế của laptop Acer Aspire 7 A715",
        "product_thumb" => "https://salt.tikicdn.com/cache/280x280/ts/product/e8/52/86/309a6150faf1ac847777029ecf416afd.jpg.webp",
        "product_content" => "<p><strong>Laptop Acer Gaming Aspire 7 A715</strong>&nbsp;được trang bị chíp xử lý AMD Ryzen 5000 series kết hợp 8GB hoặc 16GB RAM DDR4 và card đồ hoạ rời GeForce GTX1600 series giúp chiếc laptop Acer xử lý mượt các ứng dụng đồ hoạ: photoshop, Ai, Bên cạnh khả năng chiến các game khủng ở mức tốt.</p>"
        . "<p><img src='https://salt.tikicdn.com/cache/w750/ts/product/81/b1/d1/b2b9adf81e30371f5f9e56e04e8e58bc.jpg.webp'></p>",
        "cat_id" => 2,
    ),
);
