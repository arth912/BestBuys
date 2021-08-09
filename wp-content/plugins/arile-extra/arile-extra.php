<?php
/**
* Plugin Name:       	Arile Extra
* Plugin URI:        	https://themearile.com/arilewp/
* Description:       	Arile Extra Enhances ThemeArile with additional functionality.
* Version:           	2.7
* Author: 				ThemeArile
* Author URI: 			https://themearile.com/
* Tested up to: 		5.7.2
* Requires: 			4.6 or higher
* License: 				GPLv3 or later
* License URI: 			http://www.gnu.org/licenses/gpl-3.0.html
* Requires PHP: 		5.6
* Text Domain: 			arile-extra
* Domain Path: 			/languages
*/

define( 'arile_extra_plugin_url', plugin_dir_url( __FILE__ ) );
define( 'arile_extra_plugin_dir', plugin_dir_path( __FILE__ ) );



if( !function_exists('arile_extra_init') ){
	function arile_extra_init(){
		$activate_theme_data = wp_get_theme(); // getting current theme data
		$activate_theme = $activate_theme_data->name;
		
		if( 'ArileWP' == $activate_theme || 'Business Street' == $activate_theme || 'StrangerWP' == $activate_theme || 'NewYork City' == $activate_theme || 'InteriorPress' == $activate_theme || 'Architect Design' == $activate_theme || 'ArileWP Child Theme' == $activate_theme || 'Ariletech' == $activate_theme){
			require("inc/arilewp/arilewp.php");
		}
	    if( 'ConsultStreet' == $activate_theme || 'BrightPress' == $activate_theme || 'FitnessBase' == $activate_theme || 'ConsultStreet Child Theme' == $activate_theme || 'AssentPress' == $activate_theme){
			require("inc/consultstreet/consultstreet.php");
		}
		if( 'Designexo' == $activate_theme || 'Empresa' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){
			require("inc/designexo/designexo.php");
		}
	}
	add_action( 'init', 'arile_extra_init' );
}


/**
 * Define plugin textdomain.
 */
function arile_extra_textdomain() {
  load_plugin_textdomain( 'arile-extra', false, plugin_dir_url(__FILE__). 'languages' ); 
}
add_action( 'init', 'arile_extra_textdomain' );

/**
 * The code during plugin activation.
 */
function activate_arile_extra() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/arile-extra-activator.php';
	Arile_Extra_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_arile_extra' );