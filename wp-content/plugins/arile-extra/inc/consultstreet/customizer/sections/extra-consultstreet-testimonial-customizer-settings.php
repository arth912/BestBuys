<?php
/**
 * Frontpage Testimonial.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Homepage_Testimonial_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Testimonial_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'consultstreet_main_testimonial_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Testimonial Options', 'arile-extra' ),
						'section' => 'consultstreet_theme_testimonial',
					),
				),
			    	
				'consultstreet_testimonial_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'arile-extra' ),
						'section'  => 'consultstreet_theme_testimonial',
					),
				),
				
				'consultstreet_testimonial_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Testimonial', 'arile-extra' ),
						'section'  => 'consultstreet_theme_testimonial',
					),
				),

			);

		}

	}

	new ConsultStreet_Customize_Homepage_Testimonial_Option();

endif;