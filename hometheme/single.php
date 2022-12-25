<?php get_header(); ?>
<article class="post">
    <h2 class="single-title">
        <a class="single-a" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <hr>
    <p>
    <?php the_post_thumbnail('banner-image'); ?>    
    <?php the_content(); ?>
    </p>
</article>