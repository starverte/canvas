<?php
/**
 * Canvas functions and definitions
 *
 * @package Flint/Canvas
 */

if ( ! function_exists( 'canvas_after_setup_theme' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function canvas_after_setup_theme() {
  require( get_stylesheet_directory() . '/inc/customizer.php' );
  register_nav_menus( array(
    'footer-left' => __( 'Footer (Left)', 'canvas' ),
  ) );
}
endif; // canvas_after_setup_theme
add_action( 'after_setup_theme', 'canvas_after_setup_theme', 10 );