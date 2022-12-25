<?php
    get_header();
    if ( have_posts() ){ ?>
        <h2>Search for: <?php the_search_query(); ?> </h2>
        <?php while (have_posts()) {
            the_post();
            ?>
        <?php get_template_part('content', get_post_format()); ?>
<?php        
    }
}
else{
    echo "<p>No content found</p>";
} 
get_footer();   
?>