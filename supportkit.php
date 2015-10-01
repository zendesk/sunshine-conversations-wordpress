<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://twitter.com/gozmike
 * @since             1.0.0
 * @package           Supportkit
 *
 * @wordpress-plugin
 * Plugin Name:       SupportKit
 * Plugin URI:        https://supportkit.io
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mike Gozzo
 * Author URI:        https://twitter.com/gozmike
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       supportkit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-supportkit-activator.php
 */
function activate_supportkit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-supportkit-activator.php';
	Supportkit_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-supportkit-deactivator.php
 */
function deactivate_supportkit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-supportkit-deactivator.php';
	Supportkit_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_supportkit' );
register_deactivation_hook( __FILE__, 'deactivate_supportkit' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-supportkit.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_supportkit() {

	$plugin = new Supportkit();
	$plugin->run();

}
run_supportkit();
