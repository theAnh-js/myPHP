<?php
$memberList = array(
    1 => array(
        "id" => 1719,
        "fullname" => "Luong The Anh",
        "email" => "luongtheanh@gmail.com",
    ),
    2 => array(
        "id" => 2345,
        "fullname" => "Luong The Em",
        "email" => "luongtheem@gmail.com",
    )
);

function checkArr($arr) {
    return is_array($arr) && !empty($arr);
}
?>;
<html>
    <head>
        <title>embed php in html-2</title>
    </head>
    <body>
        <?php if (checkArr($memberList)) {
            ?>;
            <table border="1px solid" width="50%">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($memberList as $index => $member) {
                        ?>
                        <tr align="center">
                            <td><?php echo $index; ?></td>
                            <td> <?php echo $member["id"]; ?></td>
                            <td><?php echo $member["fullname"]; ?></td>
                            <td><?php echo $member["email"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php } else {
            ?>;
            <p>Dữ liệu không tồn tại.</p>
            <?php
        }
        ?>;
    </body>
</html>

