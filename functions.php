<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
   /* tolka functions */
  '/tolka/social-widget.php',                  // Social Shares
  '/tolka/acf.php',                            // ACF Contact page
  '/tolka/services-widget.php',                // Widget
  '/tolka/portfolio-cpt.php',                  // CTP
  '/tolka/tolka-extras.php'  ,                  //Developer extras
  '/tolka/customizer-socials.php',
  '/tolka/display-socials.php'
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

// public function bulk_edit_options() {
// 		$option = 'per_page';
// 		$args   = array(
// 			'label'   => __( 'Posts', 'wordpress-seo' ),
// 			'default' => 10,
// 			'option'  => 'wpseo_posts_per_page',
// 		);
// 		add_screen_option( $option, $args );
// 	}
