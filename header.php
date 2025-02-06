<?php
// This file generates content displayed at the top of the webpage
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name');?></title>

        <meta charset = "<?php bloginfo('charset');?>">

        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

        <link href = "<?php bloginfo('stylesheet_url');?>" rel = "stylesheet" type = "text/css">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <header class = "header">
            <div class = "header__logo-container">
                <a href = "<?php echo esc_url(home_url('/'));?>">
                    <img class = "header__logo" src = "<?php echo get_template_directory_uri();?>/assets/images/big-logo.png" alt = "Site Logo">
                </a>
            </div>
        </header>
        <div id = "header-menu-container">
            <div class = "header-menu__mobile-button"></div>
            <img src = "<?php echo get_template_directory_uri(); ?>/assets/images/big-square-logo.png" class = "header__small-logo">
            <?php wp_nav_menu(array('menu' => 'header-menu', 'theme_location' => 'header-menu'));?>
        </div>