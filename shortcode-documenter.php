<?php
/*
Plugin Name: Shortcode Documenter
Version: 0.0.1
Description: Provide a shortcode to use when documenting shortcodes.
Author: washingtonstateuniversity, jeremyfelt
Author URI: https://web.wsu.edu/
Plugin URI: https://web.wsu.edu/wordpress/plugins/shortcode-documenter/
Text Domain: shortcode-documenter
Domain Path: /languages
*/

class WSU_Shortcode_Documenter {
	/**
	 * @var WSU_Shortcode_Documenter
	 */
	private static $instance;

	/**
	 * Maintain and return the one instance and initiate hooks when
	 * called the first time.
	 *
	 * @since 0.0.1
	 *
	 * @return \WSU_Shortcode_Documenter
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new WSU_Shortcode_Documenter();
			self::$instance->setup_hooks();
		}
		return self::$instance;
	}

	/**
	 * Setup hooks to include.
	 *
	 * @since 0.0.1
	 */
	public function setup_hooks() {
		add_shortcode( 'shortcode_doc', array( $this, 'display_shortcode_doc' ) );
	}

	/**
	 * Process the `shortcode_doc` shortcode.
	 *
	 * @since 0.0.1
	 *
	 * @param $args
	 * @param $content
	 *
	 * @return string
	 */
	public function display_shortcode_doc( $args, $content ) {
		return 'Shortcode documentation';
	}
}

add_action( 'after_setup_theme', 'WSU_Shortcode_Documenter' );
/**
 * Start things up.
 *
 * @return \WSU_Shortcode_Documenter
 */
function WSU_Shortcode_Documenter() {
	return WSU_Shortcode_Documenter::get_instance();
}