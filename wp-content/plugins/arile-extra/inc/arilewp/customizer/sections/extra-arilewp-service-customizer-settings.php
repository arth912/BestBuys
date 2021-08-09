<?php
/**
 * Frontpage Service.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Service_Option' ) ) :

	class ArileWP_Customize_Homepage_Service_Option extends ArileWP_Customize_Base_Option {

 

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'arilewp_main_service_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Service Options', 'arile-extra' ),
						'section' => 'arilewp_theme_service',
					),
				),
			    	
				'arilewp_service_area_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Service Enable/Disable', 'arile-extra' ),
						'section'  => 'arilewp_theme_service',
					),
				),

			);

		}

	}

	new ArileWP_Customize_Homepage_Service_Option();

endif;
