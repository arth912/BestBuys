<?php
/**
 * Frontpage Theme Info Area.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;


if ( ! class_exists( 'ArileWP_Customize_Homepage_theme_info_Option' ) ) :

	class ArileWP_Customize_Homepage_theme_info_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'arilewp_theme_info_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Theme Info Area Options', 'arile-extra' ),
						'section' => 'arilewp_theme_info_area',
					),
				),
				
				'arilewp_theme_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Theme Info Area Enable/Disable', 'arile-extra' ),
						'section'  => 'arilewp_theme_info_area',
					),
				),
				
				
				'arilewp_theme_info_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Info', 'arile-extra' ),
						'section'  => 'arilewp_theme_info_area',
					),
				),

			);

		}

	}

	new ArileWP_Customize_Homepage_theme_info_Option();

endif;
