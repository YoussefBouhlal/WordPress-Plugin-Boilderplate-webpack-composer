<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com/
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */
class Plugin_Name_Settings {

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
	 * add_settings_menu
	 *
	 * @since    1.0.0
	 * @return void
	 */
	public function add_settings_menu() {
		add_menu_page( 
			__('WordPress Plugin Boilerplate', PLUGIN_NAME_TEXT_DOMAIN),
			__('WordPress Plugin Boilerplate', PLUGIN_NAME_TEXT_DOMAIN),
			'manage_options',
			'plugin-name-settings',
			array($this, 'render_settings_page'),
			'dashicons-admin-generic',
			3
		);
	}
	
	/**
	 * render_settings_page
	 *
	 * @since    1.0.0
	 * @return void
	 */
	public function render_settings_page(){
		include_once( PLUGIN_NAME_PLUGIN_PATH . 'admin/templates/page-settings.php' );
	}
}
