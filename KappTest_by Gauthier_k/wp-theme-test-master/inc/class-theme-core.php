<?php

class Theme_Core {

	private static $_instance = null;

	public function __construct() {
		add_action( 'init', array( $this, 'assets' ) );
	}

	/**
	 * ------------------------------------------------------------------
	 * Enqeue styles
	 * ------------------------------------------------------------------
	 *
	 * @return void
	 */
	public function assets() {
		wp_enqueue_style( 'kapp-main-style', get_stylesheet_uri(), array(), false );
	}

	/**
	 * ------------------------------------------------------------------
	 * Get the theme's instance
	 * ------------------------------------------------------------------
	 *
	 * @return Theme_Core
	 */
	public static function instance() {
		if ( null !== self::$_instance ) {
			return self::$_instance;
		}
		return self::init();
	}

	/**
	 * ------------------------------------------------------------------
	 * Instantiate
	 * ------------------------------------------------------------------
	 *
	 * @return Theme_Core
	 */
	final public static function init() {
		return self::$_instance = new self();
	}

	/**
	 * ------------------------------------------------------------------
	 * The text
	 * ------------------------------------------------------------------
	 *
	 * @return void
	 */
	protected function text() {
		return apply_filters( 'text-message', 'This is Kapp Theme' );
	}
}
