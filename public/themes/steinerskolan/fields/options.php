<?php

declare(strict_types=1);
/*
* Register theme settings options page
*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ]);
}
/*
* Header options
*/
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'header_fields',
        'title' => 'Header',
        'fields' => [
            [
                'key' => 'site_logo',
                'label' => 'Site Logo',
                'name' => 'site_logo',
                'type' => 'image',
                'instructions' => 'Add a logo to your site. Preferable height: 210px',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ],
            [
                'key' => 'hero_heading',
                'name' => 'hero_heading',
                'label' => 'Hero Text Heading',
                'type' => 'text',
                'instructions' => 'Set the text for the header',
                'wrapper' => [
                    'width' => 33,
                ],
            ],
            [
                'key' => 'hero_content_button_text',
                'name' => 'hero_content_button_text',
                'label' => 'Hero Button Text',
                'type' => 'text',
                'instructions' => 'The text of the button',
                'wrapper' => [
                    'width' => 33,
                ],
            ],
            [
                'key' => 'hero_content_button_link',
                'name' => 'hero_content_button_link',
                'label' => 'Hero Button Link',
                'type' => 'text',
                'instructions' => 'Link for the button',
                'wrapper' => [
                    'width' => 33,
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
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


/*
* Footer options
*/

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'footer_fields',
        'title' => 'Footer',
        'fields' => [
            [
                'key' => 'footer_logo',
                'label' => 'Footer Logo',
                'name' => 'footer_logo',
                'type' => 'image',
                'instructions' => 'Add a logo to your footer. Preferable height: 210px',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ],
            [
                'key' => 'subheader_1',
                'name' => 'subheader_1',
                'label' => 'Subheader 1',
                'type' => 'text',
                'instructions' => 'Set the text for subheader 1',
                
            ],
            [
                'key' => 'subheader_2',
                'name' => 'subheader_2',
                'label' => 'Subheader 2',
                'type' => 'text',
                'instructions' => 'Set the text for subheader 2',
                
            ],
            [
                'key' => 'details_1',
                'name' => 'details_1',
                'label' => 'Details 1',
                'type' => 'textarea',
                'instructions' => 'Add information for subheader 1',
                
            ],
            [
                'key' => 'details_2',
                'name' => 'details_2',
                'label' => 'Details 2',
                'type' => 'textarea',
                'instructions' => 'Add information for subheader 2',
                
            ],
            [
                'key' => 'facebook_link',
                'name' => 'facebook_link',
                'label' => 'Facebook Link',
                'type' => 'link',
                'instructions' => 'Link for Facebook',
            ],
            [
                'key' => 'instagram_link',
                'name' => 'instagram_link',
                'label' => 'Instagram Link',
                'type' => 'link',
                'instructions' => 'Link for Instagram',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
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
