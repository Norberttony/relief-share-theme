<?php
/**
 * Title: Header
 * Slug: relief-share/header
 * Categories: header
 */
?>

<header class = "header">
    <div class = "header__logo-container">
        <a href = "<?php echo esc_url(home_url('/'));?>">
            <img class = "header__logo" src = "<?php echo get_parent_theme_file_uri('/assets/images/big-logo.png');?>" alt = "Site Logo">
        </a>
    </div>
</header>
<div id = "header-menu-container">
    <div class = "header-menu__mobile-button"></div>
    <img src = "<?php echo get_parent_theme_file_uri('/assets/images/big-square-logo.png'); ?>" class = "header__small-logo">
    <?php wp_nav_menu(array('menu' => 'header-menu', 'theme_location' => 'header-menu'));?>
</div>