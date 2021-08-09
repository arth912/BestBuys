<?php
/**
 * Arile Extra Customizer Class
 *
 * @package arile-extra
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileExtra_Designexo_Customizer' ) ) :

	// Designexo Customizer class
	
	class ArileExtra_Designexo_Customizer {

		public function arileextra_designexo_customizer_settings() {
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
			
           	require arile_extra_plugin_dir . 'inc/designexo/customizer/sections/extra-designexo-slider-customizer-settings.php';
			if ( 'Architect Decor' != $activate_theme ){
			require arile_extra_plugin_dir . 'inc/designexo/customizer/sections/extra-designexo-theme-info-customizer-settings.php';
			}
			require arile_extra_plugin_dir . 'inc/designexo/customizer/sections/extra-designexo-service-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/designexo/customizer/sections/extra-designexo-project-customizer-settings.php';
			require arile_extra_plugin_dir .
			'inc/designexo/customizer/sections/extra-designexo-testimonial-customizer-settings.php';
			require arile_extra_plugin_dir . '/inc/designexo/customizer/sections/extra-designexo-blog-customizer-settings.php';

		}
		
	}
endif;

$customizer_settings = new ArileExtra_Designexo_Customizer();

$customizer_settings->arileextra_designexo_customizer_settings();