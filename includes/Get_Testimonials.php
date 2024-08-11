<?php
/**
 * Main Class for loading the plugin.
 *
 * @package Get_Testimonials
 */

namespace Get_Testimonials;

/**
 * Main Class of the plugin.
 *
 * @package Get_Testimonials
 */
final class Get_Testimonials {
	/**
	 * The single instance of the class.
	 *
	 * @var   Get_Testimonials
	 * @since 1.0.0
	 */
	protected static $instance = null;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string    $plugin_slug
	 */
	protected $plugin_slug;

	/**
	 * The current version of the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string    $version    The current version of the plugin.
	 */
	protected $plugin_version;

	/**
	 * Main Get_Testimonials Instance.
	 *
	 * Ensures only one instance of Get_Testimonials is loaded or can be loaded.
	 *
	 * @since  1.0.0
	 * @static
	 * @return Get_Testimonials - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor function
	 */
	public function __construct() {
		if ( ! function_exists( 'get_plugin_data' ) ) {
			include_once \ABSPATH . 'wp-admin/includes/plugin.php';
		}
		$plugin_data = \get_plugin_data( GET_TESTIMONIALS_PATH . 'testimonial-collector.php' );

		$this->plugin_slug    = $plugin_data['TextDomain'];
		$this->plugin_version = $plugin_data['Version'];
		$this->include();
		\add_action( 'admin_notices', array( $this, 'maybe_disable_plugin' ) );
	}

	/**
	 * Include required files.
	 *
	 * @return void
	 */
	public function include() {
		// include GET_TESTIMONIALS_PATH . 'src/helpers.php';.
	}

	/**
	 * Output error message and disable plugin if requirements are not met.
	 *
	 * This fires on admin_notices.
	 *
	 * @since 1.0.0
	 */
	public function maybe_disable_plugin() {
		return true;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since  1.0.0
	 * @return string    The version number of the plugin.
	 */
	public function get_plugin_version() {
		return $this->plugin_version;
	}

	/**
	 * The slug of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since  1.0.0
	 * @return string    The slug of the plugin.
	 */
	public function get_plugin_slug() {
		return $this->plugin_slug;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 1.0.0
	 */
	public function load_plugin_textdomain() {
		\load_plugin_textdomain( $this->plugin_slug, false, GET_TESTIMONIALS_PATH . 'languages/' );
	}
}
