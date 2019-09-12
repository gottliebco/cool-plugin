<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.gottlieb-co.dk
 * @since             1.0.0
 * @package           Gottlieb_Test
 *
 * @wordpress-plugin
 * Plugin Name:       Gottlieb Test
 * Plugin URI:        https://www.gottlieb-co.dk
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           2.0.2
 * Author:            Helgi Petersen
 * Author URI:        https://www.gottlieb-co.dk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gottlieb-test
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
define( 'GOTTLIEB_TEST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gottlieb-test-activator.php
 */
function activate_gottlieb_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gottlieb-test-activator.php';
	Gottlieb_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gottlieb-test-deactivator.php
 */
function deactivate_gottlieb_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gottlieb-test-deactivator.php';
	Gottlieb_Test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gottlieb_test' );
register_deactivation_hook( __FILE__, 'deactivate_gottlieb_test' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gottlieb-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gottlieb_test() {

	$plugin = new Gottlieb_Test();
	$plugin->run();

}
run_gottlieb_test();
