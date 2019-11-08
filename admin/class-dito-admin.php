<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://dito.com.br/
 * @since      1.0.0
 *
 * @package    Dito
 * @subpackage Dito/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dito
 * @subpackage Dito/admin
 * @author     Tannus Esquerdo <tannus.esquerdo@dito.com.br>
 */
class Dito_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dito_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dito_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dito-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dito_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dito_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dito-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add an options page under the Settings submenu
	 *
	 * @since  1.0.0
	 */

	public function add_menu_dito() {
		add_menu_page(
			'Dito',
			'Dito',
			'manage_options',
			$this->plugin_name,
			array($this, 'display_dito_page'),
			"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhbWFkYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB2aWV3Qm94PSIwIDAgMTU3LjEgMTUyLjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDE1Ny4xIDE1Mi43OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6I0ZGRkZGRjt9Cjwvc3R5bGU+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE5LDE1Mi43YzEwLjUsMCwxOS04LjUsMTktMTljMC0xMC41LTguNS0xOS0xOS0xOWMtMTAuNSwwLTE5LDguNS0xOSwxOUMwLDE0NC4yLDguNSwxNTIuNywxOSwxNTIuN3oiLz4KPC9nPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNywwQzM4LjYsMCw0LjQsMzQuMiw0LjQsNzYuM2MwLDEwLjcsMi4yLDIwLjgsNi4yLDMwLjFjMi43LTAuOCw1LjUtMS4zLDguNS0xLjMKCWMxNS44LDAsMjguNiwxMi44LDI4LjYsMjguNmMwLDMuNy0wLjcsNy4yLTIsMTAuNGMxMC41LDUuNSwyMi41LDguNiwzNS4yLDguNmM0Mi4yLDAsNzYuMy0zNC4yLDc2LjMtNzYuMwoJQzE1Ny4xLDM0LjIsMTIyLjksMCw4MC43LDB6IE04MC43LDExOS41Yy0yMy44LDAtNDMuMi0xOS4zLTQzLjItNDMuMmMwLTIzLjgsMTkuMy00My4yLDQzLjItNDMuMmMyMy44LDAsNDMuMiwxOS4zLDQzLjIsNDMuMgoJQzEyMy45LDEwMC4yLDEwNC42LDExOS41LDgwLjcsMTE5LjV6Ii8+Cjwvc3ZnPgo="
		);
	}

	/**
	 * Render the Dito page for plugin
	 *
	 * @since  1.0.0
	 */

	public function display_dito_page() {
		include_once 'partials/dito-admin-display.php';
	}

	public function dito_settings() {
    //dito_reset_settings();
    $this->dito_app_settings();
		$this->dito_tracking_settings();
		$this->dito_news_settings();
	}

	public function dito_get_settings_group_name() {
    return 'dito-settings';
  }

  public function dito_app_settings() {
    $this->dito_register_setting('dito_api_key');
  }

  public function dito_tracking_settings() {
    $this->dito_register_setting('dito_home_track_enabled', true);
    $this->dito_register_setting('dito_post_track_enabled', true);
	$this->dito_register_setting('dito_page_track_enabled', true);
	$this->dito_register_setting('dito_origin');
  }

  public function dito_reset_settings() {
    $this->delete_option('dito_api_key');
    $this->delete_option('dito_home_track_enabled');
    $this->delete_option('dito_post_track_enabled');
		$this->delete_option('dito_page_track_enabled');
		$this->delete_option('dito_category_track_enabled');
		$this->delete_option('dito_news_name_selector');
		$this->delete_option('dito_news_email_selector');
		$this->delete_option('dito_news_btn_selector');
		$this->delete_option('dito_origin');
	}

	public function dito_news_settings() {
		$this->dito_register_setting('dito_news_name_selector');
		$this->dito_register_setting('dito_news_email_selector');
		$this->dito_register_setting('dito_news_btn_selector');
	}

  public function dito_register_setting($optionName, $defaultValue = null) {
    register_setting($this->dito_get_settings_group_name(), $optionName);

    if($defaultValue) {
      add_option($optionName, $defaultValue);
    }
  }

}
