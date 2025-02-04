<?php
// This file displays a post
?>

<?php get_header(); ?>

<div class = "content">
    <div class = "content__main">
        <div>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>