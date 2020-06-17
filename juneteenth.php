<?php

/**
 * @link              https://github.com/unitymakesus/juneteenth
 * @since             1.0.0
 * @package           Juneteenth
 *
 * @wordpress-plugin
 * Plugin Name:       Juneteenth Splash Page
 * Plugin URI:        https://github.com/unitymakesus/juneteenth
 * Description:       Spread Juneteenth awareness with this splash page that automatically appears on your homepage on Juneteenth! (WCAG 2.1 AA compliant modal)
 * Version:           1.0.0
 * Author:            Unity Web Agency
 * Author URI:        https://unitywebagency.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       juneteenth
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
define( 'JUNETEENTH_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-juneteenth-activator.php
 */
function activate_juneteenth() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-juneteenth-activator.php';
	Juneteenth_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_juneteenth' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-juneteenth-deactivator.php
 */
function deactivate_juneteenth() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-juneteenth-deactivator.php';
	Juneteenth_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_juneteenth' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-juneteenth.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_juneteenth() {

	/**
	 * Only run if current time (based on setting's configured Timezone)
	 * is during Juneteenth.
	 */
	$juneteenth = '617'; //TODO: change to 619
	$current_time = current_time('nj', false);

	if ($juneteenth == $current_time) {
		$plugin = new Juneteenth();
		$plugin->run();
	}

}
run_juneteenth();
