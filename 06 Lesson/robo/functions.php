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

    $wp_customize->add_section('robo_color_settings', array(
        'title' => __('Color settings', 'robo'), 
        'priority' => 30,
    ));

    $wp_customize->add_setting('h1_color', array(
        'default' => '#8c7cf0',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'h1_color', array(
        'label' =>  __('H1 Color', 'robo'),
        'section' => 'robo_color_settings',
        'settings' => 'h1_color',
    )));


}

add_action('customize_register', 'customize_register');

function customizer_script(){
    //arguments: script name, script path, dependencies, version number, load in footer
    wp_enqueue_script('robo-customizer', get_template_directory_uri() . '/js/mycustomizer.js', array('customize-preview'), '', true);
}


wp_enqueue_script('robo-scroll', get_template_directory_uri() . '/js/scroll.js', '', '', true);

add_action('customize_preview_init', 'customizer_script');


function customize_css(){
    ?>
    <style type="text/css">
        h1, h2 {color: <?php echo get_theme_mod('h1_color', '#8c7cf0'); ?>!important;}
    </style>

    <?php

}

add_action('wp_head', 'customize_css');