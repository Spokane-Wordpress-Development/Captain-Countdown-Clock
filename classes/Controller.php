<?php

namespace CaptainCountdown;


class Controller {

	const VERSION = '1.0.0';
	const VERSION_JS = '1.0.0';
	const VERSION_CSS = '1.0.0';

	const OPTION_VERSION = 'captain_countdown_version';

	public $attributes;

	/**
	 *
	 */
	public function activate()
	{
		add_option( self::OPTION_VERSION, self::VERSION );
	}

	/**
	 *
	 */
	public function init()
	{
		wp_enqueue_script( 'captain-countdown-js', plugin_dir_url( dirname( __FILE__ ) ) . 'js/captain-countdown.js', array( 'jquery' ), (WP_DEBUG) ? time() : self::VERSION_JS, TRUE );
		wp_enqueue_style( 'captain-countdown-css', plugin_dir_url( dirname( __FILE__ ) ) . 'css/captain-countdown.css', array(), (WP_DEBUG) ? time() : self::VERSION_CSS );
	}

	/**
	 *
	 */
	public function short_code()
	{

	}

	/**
	 * @param array $links
	 *
	 * @return array
	 */
	public function instructions_link( $links )
	{
		$link = '<a href="options-general.php?page=' . plugin_basename( dirname( __DIR__ ) ) . '">' . __( 'Instructions', 'captain-countdown' ) . '</a>';
		$links[] = $link;
		return $links;
	}

	/**
	 *
	 */
	public function instructions_page()
	{
		add_options_page(
			'Captain Countdown Clock ' . __( 'Instructions', 'captain-countdown' ),
			'Captain Countdown',
			'manage_options',
			plugin_basename( dirname( __DIR__ ) ),
			array( $this, 'print_instructions_page')
		);
	}

	/**
	 *
	 */
	public function print_instructions_page()
	{
		include( dirname( __DIR__ ) . '/includes/instructions.php' );
	}
}