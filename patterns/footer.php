<?php
/**
 * Title: Footer
 * Slug: relief-share/footer
 * Categories: footer
 */
?>

<footer>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'footer_menu',
            'container_class' => 'footer_menu'
        ));
    ?>
    Copyright © 2024 Relief Share Florida, a 501(c)(3) non-profit organization, All Rights Reserved.
</footer>

<?php wp_footer(); ?>