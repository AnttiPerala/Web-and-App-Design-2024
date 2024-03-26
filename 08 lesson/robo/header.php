<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest AI Tech</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="container">

        <header>
            
            <div class="branding">
            
                <?php 

                    if (function_exists('the_custom_logo')){
                        the_custom_logo();
                    }

                ?>

                <div class="titleAndTagline">

                    <h1><?php bloginfo('name'); ?></h1>
                    <p><?php bloginfo('description'); ?></p>
                    
                </div>

            </div>

            <nav>
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
            </nav>

        </header>

      