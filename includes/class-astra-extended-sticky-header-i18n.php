<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/apratt86
 * @since      1.0.0
 *
 * @package    Astra_Extended_Sticky_Header
 * @subpackage Astra_Extended_Sticky_Header/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Astra_Extended_Sticky_Header
 * @subpackage Astra_Extended_Sticky_Header/includes
 * @author     Aaron Pratt <apratt86@gmail.com>
 */
class Astra_Extended_Sticky_Header_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'astra-extended-sticky-header',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
