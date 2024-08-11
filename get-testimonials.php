<?php
/**
 * Plugin Name:     Get Testimonials
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     A simple plugin to store testimonials given by website visitors.
 * Author:          Prakritee Sharma
 * Author URI:      https://github.com/praxicodes
 * Text Domain:     get-testimonials
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Get_Testimonials
 */

use Get_Testimonials\Get_Testimonials as Plugin;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'GET_TESTIMONIALS_PLUGIN_FILE' ) ) {
	define( 'GET_TESTIMONIALS_PLUGIN_FILE', __FILE__ );
}
if ( ! defined( 'GET_TESTIMONIALS_PATH' ) ) {
	define( 'GET_TESTIMONIALS_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'GET_TESTIMONIALS_URL' ) ) {
	define( 'GET_TESTIMONIALS_URL', plugin_dir_url( __FILE__ ) );
}
if ( ! defined( 'GET_TESTIMONIALS_VERSION' ) ) {
	define( 'GET_TESTIMONIALS_VERSION', '1.0.0' );
}

if ( ! defined( 'GET_TESTIMONIALS_PLUGIN_NAME' ) ) {
	define( 'GET_TESTIMONIALS_PLUGIN_NAME', 'Get Testimonials' );
}

// Require vendor here.
require 'vendor/autoload.php';

/**
 * Initialize the final class
 */
function get_testimonials_init() {
	return Plugin::instance();
}

get_testimonials_init();
