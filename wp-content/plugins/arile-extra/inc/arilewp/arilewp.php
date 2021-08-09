<?php
/**
 * @package    arile-extra
 */

require arile_extra_plugin_dir . 'inc/arilewp/customizer/extra-arilewp-customizer.php';
require arile_extra_plugin_dir . 'inc/arilewp/customizer/extra-arilewp-customizer-options.php';
require arile_extra_plugin_dir . 'inc/arilewp/customizer/extra-arilewp-customizer-default.php';

if ( ! function_exists( 'arileextra_arilewp_frontpage_sections' ) ) :
	function arileextra_arilewp_frontpage_sections() {
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
		
		if('StrangerWP' == $activate_theme || 'NewYork City' == $activate_theme || 'InteriorPress' == $activate_theme || 'Architect Design' == $activate_theme || 'Ariletech' == $activate_theme){
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-strangerwp-slider.php';
		}else{
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-slider.php';		
		}
		if('NewYork City' != $activate_theme && 'InteriorPress' != $activate_theme){
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-siteinfo.php';
		}
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-service.php';
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-project.php';
		if('Business Street' == $activate_theme){
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-blog.php';
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-testimonial.php'; 
		}else{
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-testimonial.php';	
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-arilewp-blog.php';
		}
    }
	add_action( 'arileextra_arilewp_frontpage', 'arileextra_arilewp_frontpage_sections' );
endif;


if ( ! function_exists( 'arileextra_strangerwp_blog_sections' ) ) :
	function arileextra_strangerwp_blog_sections() {
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
		
		if('StrangerWP' == $activate_theme){
		require arile_extra_plugin_dir . 'inc/arilewp/front-page/extra-strangerwp-slider.php';
		}
    }
	add_action( 'arileextra_stranger_blogpage', 'arileextra_strangerwp_blog_sections' );
endif;