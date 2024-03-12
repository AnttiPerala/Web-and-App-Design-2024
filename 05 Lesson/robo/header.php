<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest AI Tech</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>
<body>

    <div id="container">

        <header>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ailogo.png" alt="Latest.AI Logo">

            <nav>
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
            </nav>

        </header>

      