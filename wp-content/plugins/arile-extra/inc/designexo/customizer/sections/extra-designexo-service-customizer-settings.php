<?php
/**
 * Frontpage Service.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Homepage_Service_Option' ) ) :

	class Designexo_Customize_Homepage_Service_Option extends Designexo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'designexo_main_service_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Service Options', 'arile-extra' ),
						'section' => 'designexo_theme_service',
					),
				),
			    	
				'designexo_service_area_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Service Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_service',
					),
				),
				
				'designexo_service_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Service', 'arile-extra' ),
						'section'  => 'designexo_theme_service',
					),
				),
			

			);

		}

	}

	new Designexo_Customize_Homepage_Service_Option();

endif;
