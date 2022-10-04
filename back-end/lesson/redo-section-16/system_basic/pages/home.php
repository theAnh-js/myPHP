
<!--header-->

<?php get_header() ?>
<div id="content">
    <h1 class="heading-content">HOME</h1>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    
    echo "<pre>";
    print_r($_COOKIE);
    ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna 
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit 
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
        occaecat cupidatat non proident, sunt in culpa qui officia 
        deserunt mollit anim id est laborum.</p>
</div>
<!--footer-->
<?php get_footer() ?>