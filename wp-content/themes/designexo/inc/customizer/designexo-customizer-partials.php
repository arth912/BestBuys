<?php
/** 
 * Designexo Customizer partials.
 *
 * @package designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customizer_Partials' ) ) {

	/**
	 * Customizer Partials.
	 */
	class Designexo_Customizer_Partials {

		/**
		 * Instance.
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		// site title
		public static function customize_partial_blogname() {
			return get_bloginfo( 'name' );
		}

		// Site tagline
		public static function customize_partial_blogdescription() {
			return get_bloginfo( 'description' );
		}
		
		// service title
		public static function customize_partial_designexo_service_area_title() {
			return get_theme_mod( 'designexo_service_area_title' );
		}
		
		// service description
		public static function customize_partial_designexo_service_area_des() {
			return get_theme_mod( 'designexo_service_area_des' );
		}
		
		// project title
		public static function customize_partial_designexo_project_area_title() {
			return get_theme_mod( 'designexo_project_area_title' );
		}
		
		// project description
		public static function customize_partial_designexo_project_area_des() {
			return get_theme_mod( 'designexo_project_area_des' );
		}	

		// project button text
		public static function customize_partial_designexo_project_button_text() {
			return get_theme_mod( 'designexo_project_button_text' );
		}			
		
	    // testimonial title
		public static function customize_partial_designexo_testimonial_area_title() {
			return get_theme_mod( 'designexo_testimonial_area_title' );
		}
		
		// testimonial description
		public static function customize_partial_designexo_testimonial_area_des() {
			return get_theme_mod( 'designexo_testimonial_area_des' );
		}
		
	    // blog title
		public static function customize_partial_designexo_blog_area_title() {
			return get_theme_mod( 'designexo_blog_area_title' );
		}
		
		// blog description
		public static function customize_partial_designexo_blog_area_des() {
			return get_theme_mod( 'designexo_blog_area_des' );
		}
		
		// footer copyright text
		public static function customize_partial_designexo_footer_copright_text() {
			return get_theme_mod( 'designexo_footer_copright_text' );
		}

	}
}

Designexo_Customizer_Partials::get_instance();
