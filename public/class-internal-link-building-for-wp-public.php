<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://gentryx.com/bishalsaha
 * @since      1.0.0
 *
 * @package    Internal_Link_Building_For_Wp
 * @subpackage Internal_Link_Building_For_Wp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Internal_Link_Building_For_Wp
 * @subpackage Internal_Link_Building_For_Wp/public
 * @author     Bishal Saha <bishal.saha@gmail.com>
 */
class Internal_Link_Building_For_Wp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Internal_Link_Building_For_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Internal_Link_Building_For_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/internal-link-building-for-wp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Internal_Link_Building_For_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Internal_Link_Building_For_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/internal-link-building-for-wp-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * FPasses comments to the post filter to add custom keywords.
	 *
	 * @since    1.0.0
	 * @param    string $content    the content.
	 * @return   string $content    filtered content.
	 */
	public function filter_comment( $content ) {
		return $this->filter_content( $content,1 );
	}

	/**
	 * Filters posts to add custom keywords.
	 *
	 * @since    1.0.0
	 * @param    string  $content  the content.
	 * @param    boolean $is_comment is it a comment text or not.
	 * @return   string  $content   the content.
	 */
	public function filter_content( $content, $is_comment = true ) {
		return $content;
	}

}
