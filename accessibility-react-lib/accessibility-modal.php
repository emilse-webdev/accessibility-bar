<?php

namespace Accessibility;

class AccessibilityModal_Plugin {

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
			'1.0.0',
			true
		);
	}
}

/* Start ! */
if ( is_null( AccessibilityModal_Plugin::$instance ) ) {
	AccessibilityModal_Plugin::$instance = new self();
}
