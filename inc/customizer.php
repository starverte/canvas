<?php
/**
 * canvas Theme Customizer
 *
 * @package canvas/Canvas
 * @since 0.0.0
 */

function canvas_customize_register( $wp_customize ) {

  $wp_customize->add_setting('sv_site', array(
    'default'           => 'starverte',
    'capability'        => 'edit_theme_options',
    'transport'         => 'postMessage',
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sv_site', array(
    'label'    => __('Star Verte Site', 'canvas'),
    'section'  => 'title_tagline',
    'settings' => 'sv_site',
    'priority' => '30',
    'type' => 'select',
    'choices' => array(
      'starverte'            =>  'Star Verte LLC',
      'fortcollinscreative'  =>  'Fort Collins Creative',
      'sparks'               =>  'Sparks',
    ),
  )));

}
add_action( 'customize_register', 'canvas_customize_register', 20 );

