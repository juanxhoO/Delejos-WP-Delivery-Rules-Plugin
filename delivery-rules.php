<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://dsd
 * @since             1.0.0
 * @package           Delivery_Rules
 *
 * @wordpress-plugin
 * Plugin Name:       Delivery Rules 
 * Plugin URI:        https://dsd
 * Description:       This Plugins Helps with Delivery Rules and Dates in Woocomerce for Festive Days
 * Version:           1.0.0
 * Author:            Juan Granja
 * Author URI:        https://dsd
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       delivery-rules
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DELIVERY_RULES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-delivery-rules-activator.php
 */
function activate_delivery_rules() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-delivery-rules-activator.php';
	Delivery_Rules_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-delivery-rules-deactivator.php
 */
function deactivate_delivery_rules() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-delivery-rules-deactivator.php';
	Delivery_Rules_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_delivery_rules' );
register_deactivation_hook( __FILE__, 'deactivate_delivery_rules' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-delivery-rules.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_delivery_rules() {

	$plugin = new Delivery_Rules();
	$plugin->run();

}
run_delivery_rules();
