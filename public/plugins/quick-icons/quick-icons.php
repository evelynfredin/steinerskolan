<?php

/*
  Plugin Name: Quick Icons
  Description: Quick icons block for Steinerskolan
  Version: 1.0
  Author: Yrgo
  Author URI: https://yrgo.se
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class QuickIcons
{
    function __construct()
    {
        add_action('init', [$this, 'onInit']);
    }

    function onInit()
    {
        wp_register_script('quickIconsScript', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
        register_block_type('yrgonautblocks/quick-icons', array(
            'editor_script' => 'quickIconsScript',
            'render_callback' => [$this, 'renderCallback'],
        ));
    }

    function renderCallback($attributes)
    {
        if (!is_admin()) {
            wp_enqueue_script('quickIconsSave', plugin_dir_url(__FILE__) . 'build/save.js', array('wp-element'));
        }
        ob_start(); ?>
        <div class="quickIcons">
            <pre class="hidden">
                <?= wp_json_encode($attributes) ?>
            </pre>
        </div>
<?php return ob_get_clean();
    }
}

$quickIcons = new QuickIcons();
