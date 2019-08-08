<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


if ( ! function_exists( 'socials_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function socials_customize_register( $wp_customize ) {

		$wp_customize->add_section( 'social_settings', array(
     'title' => __( 'Social Media Icons', 'theme_slug' ),
     'priority' => 100,
    ));
    $social_sites = array(
         'facebook',
         'instagram',
         'email'
     );
    $priority = 5;

     foreach( $social_sites as $social_site ) {

         $wp_customize->add_setting( "$social_site", array(
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'sanitize_callback' => 'esc_url_raw',
         ));

         $wp_customize->add_control( $social_site, array(
             'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
             'section' => 'social_settings',
             'type' => 'text',
             'priority' => $priority,
         ));

         $priority += 5;
     }
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'socials_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
// if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
// 	/**
// 	 * Setup JS integration for live previewing.
// 	 */
// 	function understrap_customize_preview_js() {
// 		wp_enqueue_script(
// 			'understrap_customizer',
// 			get_template_directory_uri() . '/js/customizer.js',
// 			array( 'customize-preview' ),
// 			'20130508',
// 			true
// 		);
// 	}
// }
// add_action( 'customize_preview_init', 'understrap_customize_preview_js' );
