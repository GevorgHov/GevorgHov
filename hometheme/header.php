<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">
<head>
    <meta charset="<?php bloginfo('name'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>" ></a></h1>
        <h5> <?php bloginfo('description'); ?> </h5>
        <nav class="site-nav">
            <?php 
                $args = array(
                    "theme_location" => "primary"
                );
                wp_nav_menu($args);
            ?>
            <div class="hd-search">
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>
