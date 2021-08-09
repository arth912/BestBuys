<?php
/**
 * Frontpage Testimonial.
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Homepage_Testimonial_Option' ) ) :

	class Designexo_Customize_Homepage_Testimonial_Option extends Designexo_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'designexo_main_testimonial_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Testimonial Options', 'arile-extra' ),
						'section' => 'designexo_theme_testimonial',
					),
				),
			    	
				'designexo_testimonial_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_testimonial',
					),
				),
				
				'designexo_testimonial_overlay_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 51,
						'label'    => esc_html__( 'Overlay Enable/Disable', 'arile-extra' ),
						'section'  => 'designexo_theme_testimonial',
					),
				),
				
				'designexo_testimonial_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 20,
						'label'    => esc_html__( 'Testimonial', 'arile-extra' ),
						'section'  => 'designexo_theme_testimonial',
					),
				),

			);

		}

	}

	new Designexo_Customize_Homepage_Testimonial_Option();

endif;