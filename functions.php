<?php 

// For loading CSS
function load_stylesheets() 
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// For loading JS
function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add menus from the admin dashboard
add_theme_support('menus');

// For adding featured image section in the admin side
add_theme_support('post-thumbnails');

// Register Menus
register_nav_menus (
    array(
        'top-menu' => 'Top Menu',
    )
);

// Add image sizes
// If set to true it will crop the image 
// and if false it don't
add_image_size('post_image', 1100, 550, false);

// For Adding Widgets Section
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);