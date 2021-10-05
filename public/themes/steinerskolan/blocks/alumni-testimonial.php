<?php

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        // Register the latest posts block
        acf_register_block_type([
            'name'              => 'latest-posts',
            'title'             => __('Alumni Testimonials'),
            'description'       => __('Show quotes of alumni.'),
            'render_template'   => 'block-templates/alumni-testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'alumni',
            'keywords'          => ['alumni'],
        ]);
    }

    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'lastest_posts_block_settings',
            'title' => 'Block settings',
            'fields' => [
                [
                    'key' => 'latest_posts_post_type',
                    'name' => 'latest_posts_post_type',
                    'label' => 'Post type',
                    'type' => 'select',
                    'choices' => [
                        'post' => 'post',
                        'alumni' => 'alumni',
                    ],
                ],
                [
                    'key' => 'latest_posts_number_of_posts',
                    'name' => 'latest_posts_number_of_posts',
                    'label' => 'Number of posts',
                    'type' => 'number',
                    'default_value' => 4,
                    'min' => 4,
                    'max' => 8,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/latest-posts',
                    ],
                ],
            ],
        ]);
    }
});
