<?php
/**
* Plugin Name: Gutenberg Custom Block
* Author: Bhavana Kumari
* Description: A custom block with a few predefined styles that accepts arbitrary text input.
* Version: 1.0
*/

// Load assets for wp-admin when editor is active
function one_gutenberg_custom_block_admin() {
   wp_enqueue_script(
      'gutenberg-notice-block-editor',
      plugins_url( 'custom-block.js', __FILE__ ),
      array( 'wp-blocks', 'wp-element' )
   );

   wp_enqueue_style(
      'gutenberg-custom-block-editor',
      plugins_url( 'custom-block.css', __FILE__ ),
      array()
   );
}

add_action( 'enqueue_block_editor_assets', 'one_gutenberg_custom_block_admin' );

// Load assets for frontend
function one_gutenberg_custom_block_frontend() {

   wp_enqueue_style(
      'gutenberg-custom-block-editor',
      plugins_url( 'custom-block.css', __FILE__ ),
      array()
   );
}
add_action( 'wp_enqueue_scripts', 'one_gutenberg_custom_block_frontend' );
