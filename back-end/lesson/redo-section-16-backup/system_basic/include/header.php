
<html>
    <head>
        <title>my system</title>
        <link href="public/css/common.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
            <header id="header">
                <a id="logo" href="#">UNIVER</a>
                <div id="user-login">  
                    <p>Xin chào <strong><?php echo show_user_info("fullname") ?>
                        </strong> (<a href="?page=logout">Thoát</a>)</p>
                </div>
                <ul class="header-list">
                    <li><a href="?page=home">home</a></li>
                    <li><a href="?page=about">about</a></li>
                    <li><a href="?page=product">product</a></li>                    
                    <li><a href="?page=news">news</a></li>
                    <li><a href="?page=contact">contact</a></li>
                </ul>
            </header>

