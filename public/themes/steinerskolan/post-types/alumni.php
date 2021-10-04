<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('alumni', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New'),
            'edit_item' => __('Edit Alumnus'),
            'name' => __('Alumni'),
            'search_items' => __('Search Alumni'),
            'singular_name' => __('Alumnus'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'menu_icon' => 'dashicons-welcome-learn-more',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
