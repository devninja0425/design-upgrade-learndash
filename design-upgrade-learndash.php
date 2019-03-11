<?php
/**
 * Plugin Name:       Design Upgrade for LearnDash
 * Description:       Instantly improve LearnDash's design &ndash; courses, lessons, topics, quizzes, profile page, course navigation widget, course grid, etc. &ndash; to more closely match your WordPress theme, and remove those unwanted default LearnDash styles. There are no options in this version, but our <a href="https://escapecreative.com/products/design-upgrade-learndash/?utm_source=wp-admin&utm_medium=free%20plugin&utm_campaign=plugins%20page"><strong>pro version</strong></a> lets you customize over 80 LearnDash elements.
 * Version:           1.4.7
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
define( 'LDX_DESIGN_UPGRADE_LEARNDASH_VERSION', '1.4.7' );

/**
 * Define Constants
 */
define( 'LDX_DESIGN_UPGRADE_LEARNDASH_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


/**
 * Theme Compatibility
 *
 * @since 1.1.3
 */
include_once plugin_dir_path( __FILE__ ) . 'inc/theme-compat.php';


/**
 * Add improved LearnDash styles to the front-end.
 *
 * @since 1.0
 * @return void
 */
function ldx_design_upgrade_learndash_enqueue_css() {

	// Add main stylesheet that cleans up LD styles
	wp_enqueue_style( 'ldx-design-upgrade-learndash', plugins_url( 'assets/css/learndash.css', __FILE__ ), array( 'learndash_style', 'sfwd_front_css', 'learndash_pager_css', 'learndash_template_style_css', 'learndash_quiz_front_css' ), '1.4.7' );

}

add_action( 'wp_enqueue_scripts', 'ldx_design_upgrade_learndash_enqueue_css' );
