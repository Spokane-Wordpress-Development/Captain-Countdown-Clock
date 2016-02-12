<?php

/**
 * Plugin Name: Captain Countdown Clock
 * Plugin URI:
 * Description: Simple Countdown Clock
 * Author: Tony DeStefano
 * Author URI: https://www.facebook.com/TonyDeStefanoWeb
 * Version: 1.0.0
 * Text Domain: captain-countdown
 *
 * Copyright 2016 Tony DeStefano
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @package CaptainCountdown
 * @author Tony DeStefano
 * @version 1.0.0
 */

require_once ( 'classes/Controller.php' );

/* controller object */
$controller = new \CaptainCountdown\Controller;

/* activate */
register_activation_hook( __FILE__, array( $controller, 'activate' ) );

/* enqueue js and css */
add_action( 'init', array( $controller, 'init' ) );

/* register shortcode */
add_shortcode ( 'captain_countdown', array( $controller, 'short_code' ) );

/* admin stuff */
if (is_admin() )
{
	/* add the instructions page link */
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $controller, 'instructions_link' ) );

	/* add the instructions page */
	add_action( 'admin_menu', array( $controller, 'instructions_page' ) );
}