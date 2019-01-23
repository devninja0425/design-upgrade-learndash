<?php
/**
 * Included in main plugin file to add compatibility for specific themes.
 * Mainly, this file will dequeue/remove any specific LearnDash styles
 * that a theme uses.
 */

// Get the current theme
$active_theme = wp_get_theme();

// Astra
// https://wpastra.com
// Compatibility added in version 1.1.3 on Aug 2, 2018
if ( 'Astra' == $active_theme->name || 'Astra' == $active_theme->parent_theme ) {

	function ldx_unhook_astra_css() {

		// Remove Astra's LearnDash Styles
		wp_dequeue_style( 'astra-learndash' );
		wp_deregister_style( 'astra-learndash' );

	}
	add_action( 'wp_enqueue_scripts', 'ldx_unhook_astra_css', 20 );

} // end if Astra


// OceanWP
// https://oceanwp.org/
// Compatibility added in version 1.4 on Oct 31, 2018
if ( 'OceanWP' == $active_theme->name || 'OceanWP' == $active_theme->parent_theme ) {

	function ldx_unhook_oceanwp_css() {

		// Remove OceanWP's LearnDash Styles
		wp_dequeue_style( 'oceanwp-learndash' );
		wp_deregister_style( 'oceanwp-learndash' );

	}
	add_action( 'wp_enqueue_scripts', 'ldx_unhook_oceanwp_css', 20 );

} // end if OceanWP
