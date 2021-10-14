<?php
/**
 * Plugin Name:       Image Cover Block
 * Description:       Block created for Steinerskolan
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           1.0
 * Author:            Yrgo
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       image-cover-block
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function create_block_image_cover_block_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'create_block_image_cover_block_block_init' );

function myguten_enqueue() {
    wp_enqueue_script(
        'image-cover-script',
        plugins_url( 'image-cover-script.js', __FILE__ )
    );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );