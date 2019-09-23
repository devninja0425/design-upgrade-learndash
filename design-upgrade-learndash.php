<?php
/**
 * Plugin Name:       Design Upgrade for LearnDash
 * Description:       <strong>Compatible with LD 2.x & LD 3.x</strong> Instantly improve LearnDash's design &ndash; font sizes, spacing, course content, profile page, focus mode, course navigation widget, etc. &ndash; to more closely match your WordPress theme. There are no options in this version, but our <a href="https://escapecreative.com/products/design-upgrade-learndash/?utm_source=wp-admin&utm_medium=free%20plugin&utm_campaign=plugins%20page"><strong>pro version</strong></a> lets you customize over 90 LearnDash elements.
 * Version:           2.3
 * Author:            Escape Creative
 * Author URI:        https://escapecreative.com/
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       design-upgrade-learndash
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * Start at version 1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LDX_DESIGN_UPGRADE_LEARNDASH_VERSION', '2.3' );

/**
 * Define Constants
 */
define( 'LDX_DESIGN_UPGRADE_LEARNDASH_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


/**
 * Adds <body> class when plugin is active.
 *
 * @since 2.0
 */
include_once LDX_DESIGN_UPGRADE_LEARNDASH_PLUGIN_DIR . 'inc/body-class.php';


/**
 * Theme Compatibility
 *
 * @since 1.1.3
 */
include_once LDX_DESIGN_UPGRADE_LEARNDASH_PLUGIN_DIR . 'inc/theme-compat.php';


/**
 * Add improved LearnDash styles to the front-end.
 *
 * @since 1.0
 * @return void
 */
function ldx_design_upgrade_learndash_enqueue_css() {

	$template = 'legacy';

	if ( class_exists( 'LearnDash_Theme_Register' ) ) {
		$template = \LearnDash_Theme_Register::get_active_theme_key();
	}

	if ( 'legacy' === $template ) {

		// Add stylesheet for "Legacy" template
		wp_enqueue_style( 'ldx-design-upgrade-learndash', plugins_url( 'assets/css/learndash.css', __FILE__ ), array( 'learndash_style', 'sfwd_front_css', 'learndash_template_style_css', 'learndash_quiz_front_css' ), '2.0' );

	} else {

		// Add stylesheet for "LearnDash 3.0" template
		wp_enqueue_style( 'ldx-design-upgrade-learndash', plugins_url( 'assets/css/ld3.css', __FILE__ ), array( 'learndash_quiz_front_css', 'learndash-front' ), '2.3' );

	} // endif

} // ldx_design_upgrade_learndash_enqueue_css()

add_action( 'wp_enqueue_scripts', 'ldx_design_upgrade_learndash_enqueue_css' );
