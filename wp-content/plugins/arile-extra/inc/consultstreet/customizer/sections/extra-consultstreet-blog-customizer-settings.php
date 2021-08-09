<?php
/**
 * Frontpage Blog.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Homepage_Blog_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Blog_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

		        'consultstreet_main_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Blog Options', 'arile-extra' ),
						'section' => 'consultstreet_theme_blog',
					),
				),
			    	
				'consultstreet_blog_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'arile-extra' ),
						'section'  => 'consultstreet_theme_blog',
					),
				),
				
				'consultstreet_top_info_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 100,
						'label'    => esc_html__( 'Project', 'arile-extra' ),
						'section'  => 'consultstreet_theme_project',
					),
				),

			);

		}

	}

	new ConsultStreet_Customize_Homepage_Blog_Option();

endif;
