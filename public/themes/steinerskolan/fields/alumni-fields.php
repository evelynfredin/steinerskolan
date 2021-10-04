<?php

declare(strict_types=1);
/*
* Register custom fields for the alumni post type
*/
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'alumnus_info',
        'title' => 'Alumnus info',
        'fields' => [
            [
                'key' => 'alumnus_occupation',
                'name' => 'alumnus_occupation',
                'label' => 'Alumnus Occupation',
                'type' => 'text',
                'instructions' => 'Add alumnus occupation',
                'wrapper' => [
                    'width' => 100,
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'alumni',
                ],
            ],
        ],

        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ]);
}
