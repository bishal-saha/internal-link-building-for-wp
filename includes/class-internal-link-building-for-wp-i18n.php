<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://gentryx.com/bishalsaha
 * @since      1.0.0
 *
 * @package    Internal_Link_Building_For_Wp
 * @subpackage Internal_Link_Building_For_Wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Internal_Link_Building_For_Wp
 * @subpackage Internal_Link_Building_For_Wp/includes
 * @author     Bishal Saha <bishal.saha@gmail.com>
 */
class Internal_Link_Building_For_Wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'internal-link-building-for-wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
