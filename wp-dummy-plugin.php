<?php
/**
 * Plugin Name: Dummy Plugin
 * Plugin URI: http://example.com
 * Description: Dummy Plugin
 * Author: Someone
 * Version: 1.0.0
 */

// Should be catched by phpcs
if (!defined('ABSPATH'))
	exit;

class Dummy_Plugin {

	public $version = '1.0.0';

	public function __construct() {
		register_activation_hook( __FILE__, array( $this, 'instal' ) );
	}

	/**
	 * Instal.
	 *
	 * @note Method's name has typo intentionally, should be catched by codespell.
	 */
	public function instal() {
		update_option( 'dummy_plugin_version', $this->version );
	}

	public function return_empty() {
        // Spaces used for indentation, should be catched by phpcs.
        return '';
	}
}

new Dummy_Plugin();
