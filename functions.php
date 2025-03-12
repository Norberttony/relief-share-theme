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
add_filter('default_wp_template_part_areas', 'relief_share_template_part_areas');

function relief_share_template_part_areas(array $areas) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'aside',
		'label'       => __('Sidebar', 'relief-share'),
		'description' => __('Sidebars appear alongside the content.', 'relief-share'),
		'icon'        => 'sidebar'
	);

	return $areas;
}


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
