<?php

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus([
        'navigation' => __('Navigation'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_theme_file_uri('assets/app.css'));
    wp_enqueue_style('style', get_theme_file_uri('assets/custom.css'));
    wp_enqueue_script('script', get_theme_file_uri('assets/app.js'));
});

// Custom fields
require get_template_directory() . '/fields/options.php';
require get_template_directory() . '/fields/alumni-fields.php';

// Custom post-types
require get_template_directory() . '/post-types/alumni.php';
require get_template_directory() . '/blocks/alumni-testimonial.php';
