<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/DVRtechnohub112/compain-tracking
 * @since             1.0.0
 * @package           Complain_Tracking
 *
 * @wordpress-plugin
 * Plugin Name:       Complain Tracking
 * Plugin URI:        https://github.com/DVRtechnohub112/compain-tracking
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            DVRtechnohub
 * Author URI:        https://github.com/DVRtechnohub112/compain-tracking
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       complain-tracking
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently pligin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-complain-tracking-activator.php
 */
function activate_complain_tracking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-complain-tracking-activator.php';
	Complain_Tracking_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-complain-tracking-deactivator.php
 */
function deactivate_complain_tracking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-complain-tracking-deactivator.php';
	Complain_Tracking_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_complain_tracking' );
register_deactivation_hook( __FILE__, 'deactivate_complain_tracking' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-complain-tracking.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_complain_tracking() {

	$plugin = new Complain_Tracking();
	$plugin->run();

}
run_complain_tracking();
