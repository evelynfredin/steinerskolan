<?php

/*
  Plugin Name: Food Block
  Description: Food Block for Steinerskolan
  Version: 1.0
  Author: Yrgo
  Author URI: https://yrgo.se
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class FoodBlock
{
    function __construct()
    {
        add_action('init', [$this, 'onInit']);
    }

    function onInit()
    {
        wp_register_script('foodBlockScript', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
        register_block_type('yrgonautblocks/food-block', array(
            'editor_script' => 'foodBlockScript',
            'render_callback' => [$this, 'renderCallback'],
        ));
    }

    function renderCallback($attributes)
    {
        if (!is_admin()) {
            wp_enqueue_script('foodBlockSave', plugin_dir_url(__FILE__) . 'build/save.js', array('wp-element'));
        }
        ob_start(); ?>
        <div class="foodBlock">
            <pre class="hidden">
                <?= wp_json_encode($attributes) ?>
            </pre>
        </div>
<?php return ob_get_clean();
    }
}

$foodBlock = new FoodBlock();
