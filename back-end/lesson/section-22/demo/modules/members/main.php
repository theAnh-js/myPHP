<?php get_header() ?>

<?php
$sql = "SELECT * FROM `tbl_user`"; #có thể thêm đk vào câu truy vấn này, ví dụ: WHERE `gender`='female'
$result = mysqli_query($conn, $sql);
#show_arr($result) . "<br>";
$list_user = array();
$num_row = mysqli_num_rows($result); // "<br>"; trả về số dòng bản ghi trong bảng trên phpmyadmin(tương đương vs số lượng user)
if ($num_row > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
//        show_arr(mysqli_fetch_assoc($result)); trả về từng row trong bảng trên phpmyadmin(tương đương vs mảng của từng user)
        $list_user[] = $row;
    }
}
//#cập nhật url
foreach($list_user as &$user){
    
    $user["url_update"] = "?mod=members&act=update&id={$user["id"]}";    
    $user["url_delete"] = "?mod=members&act=delete&id={$user["id"]}";
    #cập nhật lại thông tin user bằng &user hoặc như dưới
//    $list_user[$user["id"]-1] = $user;
}
unset($user);

show_arr($list_user);

$list_gender = array(
    "male" => "Nam",
    "female" => "Nữ",
)
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
            $count = 0;
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

    <?php echo "<p>Có <strong>{$num_row}</strong> thành viên.</p>" ?>

</div>
<?php get_footer() ?>


