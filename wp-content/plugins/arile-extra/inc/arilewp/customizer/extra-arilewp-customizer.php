<?php
/**
 * Arile Extra Customizer Class
 *
 * @package arile-extra
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileExtra_ArileWP_Customizer' ) ) :

	// ArileWP Customizer class
	
	class ArileExtra_ArileWP_Customizer {
		
	
		public function arileextra_arilewp_customizer_settings() {
			
           	require arile_extra_plugin_dir . 'inc/arilewp/customizer/sections/extra-arilewp-slider-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/arilewp/customizer/sections/extra-arilewp-theme-info-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/arilewp/customizer/sections/extra-arilewp-service-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/arilewp/customizer/sections/extra-arilewp-project-customizer-settings.php';
			require arile_extra_plugin_dir . 'inc/arilewp/customizer/sections/extra-arilewp-testimonial-customizer-settings.php';
			require arile_extra_plugin_dir . '/inc/arilewp/customizer/sections/extra-arilewp-blog-customizer-settings.php';
			

		}
	

	}
endif;

$customizer_settings = new ArileExtra_ArileWP_Customizer();

$customizer_settings->arileextra_arilewp_customizer_settings();