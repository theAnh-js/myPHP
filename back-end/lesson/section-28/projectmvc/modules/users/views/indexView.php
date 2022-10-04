<?php
//show_array($list_user);
//echo $v;
echo get_header();
?>
<div id="content">
    <h1 class="heading-content">Danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>id</th>                
                <th>username</th>                
                <th>fullname</th>
                <th>age</th>
                <th>gender</th>
                <th>email</th>
            </tr>
        </thead>
        <?php
        if (isset($list_user)) {
            $amount = 0;
            foreach ($list_user as $user) {
                $amount++
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $amount ?></td>
                        <td><?php echo $user["id"] ?></td>                
                        <td><?php echo $user["username"] ?></td>
                        <td><?php echo $user["fullname"] ?></td>                            
                        <td><?php echo $user["age"] ?></td>
                        <td><?php echo $user["gender"] ?></td>
                        <td><?php echo $user["email"] ?></td>
                    </tr>
                </tbody>
                <?php
            }
        }
        ?>
    </table>
</div>
<?php
echo get_footer();
?>