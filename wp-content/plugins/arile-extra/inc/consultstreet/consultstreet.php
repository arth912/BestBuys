<?php
/**
 * @package    arile-extra
 */

require arile_extra_plugin_dir . 'inc/consultstreet/customizer/extra-consultstreet-customizer.php';
require arile_extra_plugin_dir . 'inc/consultstreet/customizer/extra-consultstreet-customizer-options.php';
require arile_extra_plugin_dir . 'inc/consultstreet/customizer/extra-consultstreet-customizer-default.php';
if($activate_theme == 'FitnessBase'){
require arile_extra_plugin_dir .  '/inc/consultstreet/customizer/customizer-page-editor/class/class-consultstreet-page-editor.php';
}
if ( ! function_exists( 'arileextra_consultstreet_frontpage_sections' ) ) :
	function arileextra_consultstreet_frontpage_sections() {	
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-slider.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-theme-info.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-service.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-project.php';
		if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme){
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-testimonial.php';
		}
		if('BrightPress' == $activate_theme || $activate_theme == 'FitnessBase'){
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-brightpress-testimonial.php';
		}
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-cta.php';		
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-blog.php';
    }
	add_action( 'arileextra_consultstreet_frontpage', 'arileextra_consultstreet_frontpage_sections' );
endif;

if ( ! function_exists( 'arileextra_consultstreet_top_header_section' ) ) :
	function arileextra_consultstreet_top_header_section() {
        require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-top-header.php';		
    }
	add_action( 'arileextra_consultstreet_top_header', 'arileextra_consultstreet_top_header_section' );
endif;