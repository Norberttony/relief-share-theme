<?php
/* This file allows theme customizability without modifying PHP code */

// main menu navigation
function relief_share_add_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer_menu' => __('Footer Menu')
    ));
}

add_action('init', 'relief_share_add_menus');


// sidebar
function relief_share_add_sidebar(){
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

add_action('widgets_init', 'relief_share_add_sidebar');


// styles
function relief_share_enqueue_styles(){
    wp_enqueue_style('relief-share-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'relief_share_enqueue_styles');


// editor styles
function relief_share_setup(){
    // it is possible to pass in an array() of stylesheet uris to this function.
    add_editor_style(get_stylesheet_uri());
}

add_action('after_setup_theme', 'relief_share_setup');


// scripts
function relief_share_enqueue_scripts(){
    wp_enqueue_script('menu', get_parent_theme_file_uri('/assets/js/menu.js'), array(), '1.0', array('strategy' => 'defer'));
}

add_action('wp_enqueue_scripts', 'relief_share_enqueue_scripts');
