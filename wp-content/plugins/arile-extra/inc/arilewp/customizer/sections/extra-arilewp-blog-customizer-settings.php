<?php
/**
 * Frontpage Blog.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Blog_Option' ) ) :

	class ArileWP_Customize_Homepage_Blog_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

		        'arilewp_main_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Blog Options', 'arile-extra' ),
						'section' => 'arilewp_theme_blog',
					),
				),
			
			    	
				'arilewp_blog_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'arile-extra' ),
						'section'  => 'arilewp_theme_blog',
					),
				),
				
				'arilewp_home_blog_meta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Blog Meta Enable/Disable', 'arile-extra' ),
						'section'  => 'arilewp_theme_blog',
					),
				),
				
				'arilewp_blog_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arile-extra' ),
							'section'         => 'arilewp_theme_blog',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arile-extra' ),
								'container-full' => esc_html__( 'Container Full', 'arile-extra' ),
							),
						),
			    ),	


			);

		}

	}

	new ArileWP_Customize_Homepage_Blog_Option();

endif;
