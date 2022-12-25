<?php
function connect_resources(){
    wp_enqueue_style('style', get_stylesheet_uri()); // Կցել style.css ֆայլը և հղումը
}
add_action('wp_enqueue_scripts', 'connect_resources');// Այսպես կանչում ենք ֆունկցիան

// Customise excerpt word count length
function custom_excerpt_length(){
    return 24;
}
add_filter('excerpt_length', 'custom_excerpt_length');
// Theme setup
function custom_theme_setup(){
    // Navigation menus
register_nav_menus(array(
    'primary' => __('Primary menu'),
    'footer' => __('Footer menu')
));
add_image_size('small-thumbnail', 180, 120, true);
add_image_size('banner-image', 1000, 250, array('left', 'top'));
add_theme_support('post-thumbnails');
// Add post formats
add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme', 'custom_theme_setup');
// Add widget locations
function widgetsInit(){
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => 'Sidebar',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my_class_name">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'widgetsInit');
?>