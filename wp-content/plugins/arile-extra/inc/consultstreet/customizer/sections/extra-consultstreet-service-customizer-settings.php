<?php
/**
 * Frontpage Service.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Homepage_Service_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Service_Option extends ConsultStreet_Customize_Base_Option {

 

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'consultstreet_main_service_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Service Options', 'arile-extra' ),
						'section' => 'consultstreet_theme_service',
					),
				),
			    	
				'consultstreet_service_area_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Service Enable/Disable', 'arile-extra' ),
						'section'  => 'consultstreet_theme_service',
					),
				),
				
				'consultstreet_service_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Service', 'arile-extra' ),
						'section'  => 'consultstreet_theme_service',
					),
				),
			

			);

		}

	}

	new ConsultStreet_Customize_Homepage_Service_Option();

endif;
