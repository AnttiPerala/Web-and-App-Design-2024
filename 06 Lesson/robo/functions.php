<?php

//register custom menu support:
register_nav_menus(array('primary-menu' => __('Primary Menu')));


//widget support:

function init_widgets(){

    register_sidebar(array(
        'name' => __('Main Sidebar'),
        'id' => 'sidebar-1',
        'description' => __('The main sidebar appears on the right side of blog pages')
    ));
}

add_action('widgets_init', 'init_widgets');


/* Add theme support for custom backgrounds */

add_theme_support('custom-background');

/* Add theme support for custom logos */



function custom_logo_setup(){

    $defaults = array(
        'height' => 155,
        'width' => 155,
        'flex-height' => true,
        'flex-width' => true
    );

    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'custom_logo_setup');


/*  More customization for the customizer API */

function customize_register($wp_customize){
    //all our customization code will go here
}

add_action('customize_register', 'customize_register');

wp_enqueue_script('robo-customizer', get_template_directory_uri() . '/js/mycustomizer.js'):