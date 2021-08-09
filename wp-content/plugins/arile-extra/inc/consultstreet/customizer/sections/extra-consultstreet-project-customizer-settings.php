<?php
/**
 * Frontpage Project.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Project_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Project_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

	            'consultstreet_main_project_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Project Options', 'arile-extra' ),
						'section' => 'consultstreet_theme_project',
					),
				),
			    	
				'consultstreet_project_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Project Enable/Disable', 'arile-extra' ),
						'section'  => 'consultstreet_theme_project',
					),
				),
				
				'consultstreet_project_front_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 10,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'arile-extra' ),
							'section'         => 'consultstreet_theme_project',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'arile-extra' ),
								'container-full' => esc_html__( 'Container Full', 'arile-extra' ),
							),
						),
			    ),
				
				'consultstreet_project_upgrade'            => array(
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

	new ConsultStreet_Customize_Homepage_Project_Option();

endif;
