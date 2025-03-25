<?php
/* This file allows theme customizability without modifying PHP code */

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
