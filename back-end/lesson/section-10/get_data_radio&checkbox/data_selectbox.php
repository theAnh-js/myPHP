<?php
    if(isset($_POST["btn-register"])){
        echo "<pre>";
        print_r($_POST);
        echo"<br>";
        echo "------------------"."<br>";
        
        if(empty($_POST["pay"])){
            echo "Vui lòng chọn hình thức thanh toán.";
        }else{
            $pay = $_POST["pay"];
            echo $pay;
        }
    }
?>
<html>
    <head>
        <title>get data from select box</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Chọn hình thức thanh</label><br>
            <select name="pay">
                <option value="">Tùy chọn</option>                
                <option value="cod">Thanh toán tại nhà </option>
                <option value="banking">Thanh toán qua thẻ ngân hàng </option>
            </select>
            <input type="submit" name="btn-register" value="Register">
        </form>

    </body>
</html>


