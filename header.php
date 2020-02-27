<!doctype html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo get_bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <?php wp_head(); ?>
</head>

<body>
    <div class="header border rounded shadow-sm">
        <div id="headerimg">
            <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
            <div class="description"><?php bloginfo('description'); ?></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="menu" class="col">
                <?php wp_nav_menu()  ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8">