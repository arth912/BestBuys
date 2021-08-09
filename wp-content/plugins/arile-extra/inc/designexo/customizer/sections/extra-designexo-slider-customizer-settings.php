<?php
/**
 * Frontpage Main Slider.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Homepage_Slider_Option' ) ) :

	class Designexo_Customize_Homepage_Slider_Option extends Designexo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'designexo_main_slider_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Slider Options', 'arile-extra' ),
						'section' => 'designexo_main_theme_slider',
					),
				),
				
	
				'designexo_main_slider_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_main_theme_slider',
					),
				),	
				
				'designexo_main_slider_overlay_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 51,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_main_theme_slider',
					),
				),
				
				'designexo_slider_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Slides', 'arile-extra' ),
						'section'  => 'designexo_main_theme_slider',
					),
				),

			);

		}

	}

	new Designexo_Customize_Homepage_Slider_Option();

endif;
