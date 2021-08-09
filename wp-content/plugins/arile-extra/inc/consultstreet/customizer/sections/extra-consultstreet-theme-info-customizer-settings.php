<?php
/**
 * Frontpage Theme Info.
 *
 * @package consultstreet
 */

defined( 'ABSPATH' ) || exit;


if ( ! class_exists( 'ConsultStreet_Customize_Homepage_theme_info_Option' ) ) :

	class ConsultStreet_Customize_Homepage_theme_info_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'consultstreet_theme_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Theme Info Area Options', 'consultstreet' ),
						'section' => 'consultstreet_theme_info_area',
					),
				),
				
				'consultstreet_theme_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'consultstreet' ),
						'section'  => 'consultstreet_theme_info_area',
					),
				),
				
				'consultstreet_info_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Info', 'arile-extra' ),
						'section'  => 'consultstreet_theme_info_area',
					),
				),

			);

		}

	}

	new ConsultStreet_Customize_Homepage_theme_info_Option();

endif;
