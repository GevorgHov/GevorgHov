<?php
get_header();
if (have_posts()){ ?>
   <?php while (have_posts()){ ?>
        <?php the_post(); ?>
        <article class="page">
            <p><?php the_content(); ?></p>
        </article>
   <?php } ?>
<?php } 
get_footer();
?>