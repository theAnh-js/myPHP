<?php
$premiList = array(2, 3, 5, 7);

function checkInput($arr) {
    return is_array($arr);
}
?>
<html>
    <head>
        <title>embed php in html</title>
    </head>
    <body>
        <?php
        if (checkInput($premiList) && !empty($premiList)) {
            ?>
            <table border="1px solid" width="25%" >
                <thead>
                    <tr >
                        <th>Stt</th>;                    
                        <th>Số nguyên tố</th>;
                    </tr>;               
                </thead>
                <tbody>
                    <?php
                    foreach ($premiList as $index => $number) {
                        ?>
                        <tr align="center">
                            <td> <?php echo $index + 1 ?></td>                    
                            <td> <?php echo $number ?></td> 
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php } else {
            ?>
            <p>Dữ liệu không tồn tại.</p>
            <?php
        }
        ?>
    </body>
</html>

