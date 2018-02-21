<?php

/**
 *
 * @link              http://dito.com.br/
 * @since             1.0.0
 * @package           Dito
 *
 * @wordpress-plugin
 * Plugin Name:       Dito
 * Plugin URI:        http://dito.com.br/
 * Description:       Boost your site's signups by adding a top bar with social login and send segmented notifications to your users.
 * Version:           1.0.0
 * Author:            Marcos Nogueira
 * Author URI:        http://dito.com.br/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dito
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dito-activator.php
 */
function activate_dito() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dito-activator.php';
	Dito_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dito-deactivator.php
 */
function deactivate_dito() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dito-deactivator.php';
	Dito_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dito' );
register_deactivation_hook( __FILE__, 'deactivate_dito' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dito.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dito() {

	$plugin = new Dito();
	$plugin->run();

}
run_dito();
