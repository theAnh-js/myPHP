<?php
if (isset($_POST["btn-confirm"])) {

    echo "<pre>";
    print_r($_POST);
    if (empty($_POST["confirm"])) {
        echo "<strong>Vui long doc va xac nhan dieu khoan.</strong>";
    } else {
        $confirm = $_POST["confirm"];
        echo "<strong>{$confirm}</strong>";
    }
}
?>
<html>
    <head>
        <title>get data from checkbox</title>
    </head>
    <body>
        <div class="confirm">
            <h1>Xác nhận điều khoản</h1>


            <form action="" method="POST">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Tenetur harum officia facere quia rem nihil optio! Libero 
                    impedit nemo possimus natus, aperiam neque porro fugit 
                    sapiente beatae provident ratione dolor.Lorem ipsum dolor 
                    sit amet, consectetur adipisicing elit. 
                    Tenetur harum officia facere quia rem nihil optio! Libero 
                    impedit nemo possimus natus, aperiam neque porro fugit 
                    sapiente beatae provident ratione dolor.</p>
                <input type="checkbox" id="checkbox" name="confirm" value="yes">
                <label for="checkbox">Đồng ý</label><br><br><br>

                <input type="submit" name="btn-confirm" value="Confirm">
            </form>
        </div>


    </body>
    <style>
        .confirm{
            width: 400px;
            margin: 20px auto;
        }
        p{
            width: 400px;
            height: 100px;
            overflow-y: scroll;
        }
    </style>
</html>


