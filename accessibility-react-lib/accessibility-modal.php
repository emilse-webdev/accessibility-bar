<?php
/*
Plugin Name: Accessibility Plugin
Plugin URI: https://webdevstudios.com
Description: This plugin is for accessibility features on any website.
Version: 1.0.0
Author: WebDevStudios
Author URI: https://webdevstudios.com
Text Domain: accessibility-modal
*/

namespace Accessibility;

/**
 * Class AccessibilityModal_Plugin
 *
 * @author WebDevStudios
 */
class AccessibilityModal_Plugin {
	/**
	 * Version
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';

	private static $instance = null;

	private function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script' ) );
	}

	public function enqueue_script() : void {
		$file_name = 'accessibility-modal';

		if ( ! defined( 'WP_DEBUG' ) || ! \WP_DEBUG ) {
			$file_name .= '.min';
		}
		wp_enqueue_script(
			'accessibility-modal-js',
			plugins_url( "dist/{$file_name}.js", __FILE__ ),
			array(),
			self::VERSION,
			true
		);
	}
}

/* Start ! */
if ( is_null( AccessibilityModal_Plugin::$instance ) ) {
	AccessibilityModal_Plugin::$instance = new self();
}
