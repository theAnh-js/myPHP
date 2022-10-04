<?php

function get_header() {
    return "<header>
            <h1>Header</h1>
            </header>";
}

;

function get_footer() {
    return "<footer>
            <h2>Footer</h2>
            </footer>";
}
?>

<html>
    <head>
        <title>yeah</title>
    </head>
    <body>

        <?php echo get_header(); ?>

        <div class="content" >
            <h3>Content</h3>
        </div>

        <?php echo get_footer(); ?>


    </body>
</html>


