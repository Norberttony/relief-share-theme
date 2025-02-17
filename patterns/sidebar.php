<?php
/**
 * Title: Sidebar
 * Slug: relief-share/sidebar
 * Categories: sidebar
 */
?>

<?php if (is_active_sidebar('sidebar')){ ?>
    <aside id = "primary-sidebar" class = "primary-sidebar widget-area" role = "complementary">
        <?php dynamic_sidebar('sidebar'); ?>
    </aside>
<?php }