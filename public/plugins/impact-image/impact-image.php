<?php
/*
  Plugin Name: Impact Image
  Description: Impact image block for Steinerskolan
  Version: 1.0
  Author: Yrgo
  Author URI: https://yrgo.se
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ImpactImage
{
    function __construct()
    {
        add_action('init', [$this, 'onInit']);
    }

    function onInit()
    {
        wp_register_script('impactImageScript', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
        register_block_type('yrgonautblocks/impact-image', array(
            'editor_script' => 'impactImageScript',
            'render_callback' => [$this, 'renderCallback'],
        ));
    }

    function renderCallback($attributes)
    {
        if (!is_admin()) {
            wp_enqueue_script('impactImageSave', plugin_dir_url(__FILE__) . 'build/save.js', array('wp-element'));
        }
        ob_start(); ?>
        <div class="impactImage">
            <pre class="hidden">
                <?= wp_json_encode($attributes) ?>
            </pre>
        </div>
<?php return ob_get_clean();
    }
}

$impactImage = new ImpactImage();
