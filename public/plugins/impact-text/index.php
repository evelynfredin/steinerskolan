<?php
/*
  Plugin Name: Impact Text
  Description: Impact text block for Steinerskolan
  Version: 1.0
  Author: Yrgo
  Author URI: https://yrgo.se
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ImpactText
{
    function __construct()
    {
        add_action('init', array($this, 'adminAssets'));
    }

    function adminAssets()
    {
        wp_register_style('impacttextcss', plugin_dir_url(__FILE__) . 'build/index.css');
        wp_register_script('ygonautblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
        register_block_type('yrgonautblocks/impact-text', array(
            'editor_script' => 'ygonautblocktype',
            'editor_style' => 'impacttextcss',
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes)
    {
        if (!is_admin()) {
            wp_enqueue_script('impactTextSave', plugin_dir_url(__FILE__) . 'build/save.js', array('wp-element'));
            // wp_enqueue_style('impactTextSaveStyles', plugin_dir_url(__FILE__) . 'build/save.css');
        }
        ob_start(); ?>
        <section class="py-32">
            <div class="px-10 md:px-0 md:w-3/6 mx-auto">
                <h3 class="text-center text-2xl impactText">
                    <pre class="hidden">
                        <?= wp_json_encode($attributes) ?>
                    </pre>
                </h3>
            </div>
        </section>
<?php return ob_get_clean();
    }
}

$impactText = new ImpactText();
