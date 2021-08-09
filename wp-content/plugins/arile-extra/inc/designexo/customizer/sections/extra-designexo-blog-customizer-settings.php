<?php
/**
 * Frontpage Blog.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Homepage_Blog_Option' ) ) :

	class Designexo_Customize_Homepage_Blog_Option extends Designexo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

		        'designexo_main_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Blog Options', 'arile-extra' ),
						'section' => 'designexo_theme_blog',
					),
				),
			    	
				'designexo_blog_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_blog',
					),
				),
				
				'designexo_blog_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arile-extra' ),
							'section'         => 'designexo_theme_blog',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arile-extra' ),
								'container-full' => esc_html__( 'Container Full', 'arile-extra' ),
							),
						),
			    ),	
				
				'designexo_home_blog_meta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Meta Date Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_blog',
					),
				),
				
				'designexo_top_info_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 100,
						'label'    => esc_html__( 'Project', 'arile-extra' ),
						'section'  => 'designexo_theme_project',
					),
				),

			);

		}

	}

	new Designexo_Customize_Homepage_Blog_Option();

endif;
