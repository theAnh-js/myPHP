<?php get_header() ?>

<?php
$sql = "SELECT * FROM `tbl_user`"; #có thể thêm đk vào câu truy vấn này, ví dụ: WHERE `gender`='female'
$result = mysqli_query($conn, $sql);
#show_arr($result) . "<br>";
$num_row = mysqli_num_rows($result); // "<br>"; trả về số dòng bản ghi trong bảng trên phpmyadmin(tương đương vs số lượng user)
#get page
$page = isset($_GET["page"]) ? (int) $_GET["page"] : 1;
#đặt số bản ghi trên trang.
$num_row_per_page = 3;
#Lấy tổng số bản ghi từ db.
$total_row = $num_row;
#Lấy tổng số trang.
$total_page = ceil($total_row / $num_row_per_page);
#Lấy trang start
$start = ($page - 1) * $num_row_per_page;

$new_sql = "SELECT * FROM `tbl_user` LIMIT {$start}, {$num_row_per_page}";
$new_result = mysqli_query($conn, $new_sql);
$new_num_row = mysqli_num_rows($new_result);
$list_user = array();
if ($new_num_row > 0) {
    while ($row = mysqli_fetch_assoc($new_result)) {
        //show_arr(mysqli_fetch_assoc($result)); trả về từng row trong bảng trên phpmyadmin(tương đương vs mảng của từng user)
        $list_user[] = $row;
    }
}
//#cập nhật url
foreach ($list_user as &$user) {
    $user["url_update"] = "?mod=members&act=update&id={$user["id"]}";
    $user["url_delete"] = "?mod=members&act=delete&id={$user["id"]}";
    #cập nhật lại thông tin user bằng &user hoặc như dưới
//    $list_user[$user["id"]-1] = $user;
}
unset($user);
//show_arr($list_user);
$list_gender = array(
    "male" => "Nam",
    "female" => "Nữ",
);
?>
<div id="content">
    <style>
        .table-data{
            border-collapse: collapse;
            margin: 15px auto;
        }
        .table-data thead tr th{
            padding: 4px 8px;
            border-bottom: 1px solid #ddd;
        }
        .table-data tbody tr td{
            padding: 8px 15px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .add_new{
            font-size: 20px;
        }
        .pagging-list{
            margin: 0;
            padding: 0;
            margin-top: 30px;
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
        .active{
            background-color: #00bfff57;
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
            background-color: #00bfff57;
        }


    </style>
    <a class="add_new" href="?mod=members&act=add">Thêm mới thành viên.</a>

    <table class="table-data" border="1">
        <thead>
            <tr>
                <th>Stt</th>
                <th>Fullname</th>                
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Do</th>
            </tr>
        </thead>
<?php
if (!empty($list_user)) {
    $count = $start;
    ?>
            <tbody>
            <?php
            foreach ($list_user as $user) {
                $count++;
                ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $user["fullname"] ?></td>                
                        <td><?php echo $user["username"] ?></td>
                        <td><?php echo $user["email"] ?></td>
                        <td><?php echo $list_gender[$user["gender"]]; ?></td>                        
                        <td><a href="<?php echo $user["url_update"] ?>"> Edit</a> | <a href="<?php echo $user["url_delete"] ?>">Delete</a></td>

                    </tr>
    <?php } ?>
            </tbody>
            <?php } ?>
    </table>

<?php echo "<em>Có <strong>{$num_row}</strong> thành viên.</em>" ?>


<?php echo get_pagging($page, $total_page, "?mod=members&act=main&page=") ?>


</div>
<?php get_footer() ?>


