
<?php 
    if(isset($_POST["btn-add"])){
        echo $_POST["post-content"];
    }
?>

<html>
    <head>
        <title>Tích hợp trình soạn thảo văn bản vào website.</title>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <style>
            #content{
                width: 960px;
                margin: 0 auto;
            }
        </style>

        <div id="content">
            <h1>Integrate a text editor into the website.</h1>
            <form action="" method="POST">
                <textarea class="ckeditor" name="post-content"></textarea> 
                <input type="submit" name="btn-add" value ="ADD"/>
            </form>

        </div>
    </body>
</html>

