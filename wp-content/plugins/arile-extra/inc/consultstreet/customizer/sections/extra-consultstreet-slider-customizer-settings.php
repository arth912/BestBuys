<?php
/**
 * Frontpage Main Slider.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Homepage_Slider_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Slider_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(
			
				'consultstreet_main_slider_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Slider Options', 'arile-extra' ),
						'section' => 'consultstreet_main_theme_slider',
					),
				),
				
	
				'consultstreet_main_slider_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Slider Enable/Disable', 'arile-extra' ),
						'section'  => 'consultstreet_main_theme_slider',
					),
				),	
				
				'consultstreet_main_slider_overlay_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 51,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arilewp' ),
						'section'  => 'consultstreet_main_theme_slider',
					),
				),
				
				'consultstreet_main_slider_content_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 53,
						'label'           => esc_html__( 'Slide content color', 'consultstreet' ),
						'section'         => 'consultstreet_main_theme_slider',
						'choices'         => array(
							'alpha' => false,
						),
					),
				),	
				
				'consultstreet_slider_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Slides', 'arile-extra' ),
						'section'  => 'consultstreet_main_theme_slider',
					),
				),

			);

		}

	}

	new ConsultStreet_Customize_Homepage_Slider_Option();

endif;
