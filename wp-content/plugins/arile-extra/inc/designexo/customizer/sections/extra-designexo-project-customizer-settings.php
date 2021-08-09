<?php
/**
 * Frontpage Project.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Homepage_Project_Option' ) ) :

	class Designexo_Customize_Homepage_Project_Option extends Designexo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

	            'designexo_main_project_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Project Options', 'arile-extra' ),
						'section' => 'designexo_theme_project',
					),
				),
			    	
				'designexo_project_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Project Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_project',
					),
				),
				
				'designexo_project_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container-fluid',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 10,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arile-extra' ),
							'section'         => 'designexo_theme_project',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arile-extra' ),
								'container-fluid' => esc_html__( 'Container Full', 'arile-extra' ),
							),
						),
			    ),
				
				'designexo_project_button_link' => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 61,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'arile-extra' ),
						'section'         => 'designexo_theme_project',
					),
				),
				
				'designexo_project_upgrade'            => array(
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

	new Designexo_Customize_Homepage_Project_Option();

endif;
