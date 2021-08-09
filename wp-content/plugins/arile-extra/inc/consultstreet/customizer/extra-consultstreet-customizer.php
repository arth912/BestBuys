<?php
/**
 * Arile Extra Customizer Class
 *
 * @package arile-extra
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileExtra_ConsultStreet_Customizer' ) ) :

	// ArileWP Customizer class
	
	class ArileExtra_ConsultStreet_Customizer {
		
	
		public function arileextra_consultstreet_customizer_settings() {
			
			
			require arile_extra_plugin_dir . 'inc/consultstreet/customizer/sections/extra-consultstreet-top-header-customizer-settings.php';
           	require arile_extra_plugin_dir . 'inc/consultstreet/customizer/sections/extra-consultstreet-slider-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/consultstreet/customizer/sections/extra-consultstreet-theme-info-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/consultstreet/customizer/sections/extra-consultstreet-service-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/consultstreet/customizer/sections/extra-consultstreet-project-customizer-settings.php';
			require arile_extra_plugin_dir .
			'inc/consultstreet/customizer/sections/extra-consultstreet-testimonial-customizer-settings.php';
		    require arile_extra_plugin_dir . 'inc/consultstreet/customizer/sections/extra-consultstreet-cta-customizer-settings.php';
			require arile_extra_plugin_dir . '/inc/consultstreet/customizer/sections/extra-consultstreet-blog-customizer-settings.php';
			

		}
	

	}
endif;

$customizer_settings = new ArileExtra_ConsultStreet_Customizer();

$customizer_settings->arileextra_consultstreet_customizer_settings();