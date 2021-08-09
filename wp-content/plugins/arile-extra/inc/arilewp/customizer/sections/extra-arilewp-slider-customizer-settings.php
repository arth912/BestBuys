<?php
/**
 * Frontpage Main Slider.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Slider_Option' ) ) :

	class ArileWP_Customize_Homepage_Slider_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'arilewp_main_slider_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Slider Options', 'arile-extra' ),
						'section' => 'arilewp_main_theme_slider',
					),
				),
				
	
				'arilewp_main_slider_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'arile-extra' ),
						'section'  => 'arilewp_main_theme_slider',
					),
				),	
				
				'arilewp_main_slider_overlay_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 51,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_main_theme_slider',
					),
				),
				
				'arilewp_slider_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Slides', 'arile-extra' ),
						'section'  => 'arilewp_main_theme_slider',
					),
				),

			);

		}

	}

	new ArileWP_Customize_Homepage_Slider_Option();

endif;
