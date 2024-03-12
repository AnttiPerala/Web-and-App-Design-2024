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