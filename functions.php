<?php
/* This file allows theme customizability without modifying PHP code */

// main menu navigation
function add_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer_menu' => __('Footer Menu')
    ));
}

add_action('init', 'add_menus');


// sidebar
function add_sidebar(){
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        )
    );
}

add_action('widgets_init', 'add_sidebar');


// scripts
function add_scripts(){
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0', array('strategy' => 'defer'));
}

add_action('wp_enqueue_scripts', 'add_scripts');

?>