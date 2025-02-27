<?php
/**
 * Title: Header
 * Slug: relief-share/header
 * Categories: header
 */
?>
<div id = "header-menu-container">
    <div class = "header-menu__mobile-button"></div>
    <img src = "<?php echo get_parent_theme_file_uri('/assets/images/big-square-logo.png'); ?>" class = "header__small-logo">
    <?php wp_nav_menu(array('menu' => 'header-menu', 'theme_location' => 'header-menu'));?>
</div>