<?php
// This file is the default layout for the website


// Loads in header.php
?>
<?php get_header(); ?>

<div class = "content">
    <div class = "content__main">
        <?php
            if (have_posts()){
                while(have_posts()){
                    the_post();
        ?>
                    <div>
                        <h2>
                            <a href = "<?php the_permalink();?>" title = "<?php the_title_attribute();?>">
                                <?php the_title();?>
                            </a>
                        </h2>
                        <?php the_excerpt();?>
                    </div>
        <?php
                }
            }else{
        ?>
                <div>No posts found.</div>
        <?php
            }
        ?>
    </div>
    <?php get_sidebar();?>
</div>


<?php get_footer();