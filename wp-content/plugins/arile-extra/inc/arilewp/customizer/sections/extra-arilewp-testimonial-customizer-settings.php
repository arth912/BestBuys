<?php
/**
 * Frontpage Testimonial.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ArileWP_Customize_Homepage_Testimonial_Option' ) ) :

	class ArileWP_Customize_Homepage_Testimonial_Option extends ArileWP_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'arilewp_main_testimonial_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Testimonial Options', 'arile-extra' ),
						'section' => 'arilewp_theme_testimonial',
					),
				),
			    	
				'arilewp_testimonial_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'arile-extra' ),
						'section'  => 'arilewp_theme_testimonial',
					),
				),
				
				'arilewp_testimonial_overlay_disable'            => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'ArileWP_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 51,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arilewp' ),
						'section'  => 'arilewp_theme_testimonial',
					),
				),
				
				'arilewp_testimonial_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Testimonial', 'arile-extra' ),
						'section'  => 'arilewp_theme_testimonial',
					),
				),

			);

		}

	}

	new ArileWP_Customize_Homepage_Testimonial_Option();

endif;