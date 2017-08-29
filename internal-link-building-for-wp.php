<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://gentryx.com/bishalsaha
 * @since             1.0.0
 * @package           Internal_Link_Building_For_Wp
 *
 * @wordpress-plugin
 * Plugin Name:       Internal Link Building for WP
 * Plugin URI:        http://gentryx.com/wp-plugin/internal-link-building-for-wp
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bishal Saha
 * Author URI:        http://gentryx.com/bishalsaha
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       internal-link-building-for-wp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-internal-link-building-for-wp-activator.php
 */
function activate_internal_link_building_for_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-internal-link-building-for-wp-activator.php';
	Internal_Link_Building_For_Wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-internal-link-building-for-wp-deactivator.php
 */
function deactivate_internal_link_building_for_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-internal-link-building-for-wp-deactivator.php';
	Internal_Link_Building_For_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_internal_link_building_for_wp' );
register_deactivation_hook( __FILE__, 'deactivate_internal_link_building_for_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-internal-link-building-for-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_internal_link_building_for_wp() {

	$plugin = new Internal_Link_Building_For_Wp();
	$plugin->run();

}
run_internal_link_building_for_wp();
