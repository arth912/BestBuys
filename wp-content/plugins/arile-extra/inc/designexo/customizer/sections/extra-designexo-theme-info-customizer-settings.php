<?php
/**
 * Frontpage Theme Info.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;


if ( ! class_exists( 'Designexo_Customize_Homepage_theme_info_Option' ) ) :

	class Designexo_Customize_Homepage_theme_info_Option extends Designexo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'designexo_theme_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Theme Info Area Options', 'arile-extra' ),
						'section' => 'designexo_theme_info_area',
					),
				),
				
				'designexo_theme_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_info_area',
					),
				),
				
				'designexo_theme_info_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Info', 'arile-extra' ),
						'section'  => 'designexo_theme_info_area',
					),
				),
				
				

			);

		}

	}

	new Designexo_Customize_Homepage_theme_info_Option();

endif;
