<?php
/**
 * Frontpage Call to action
 *
 * @package arile-extra
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Homepage_Cta_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Cta_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

			    'consultstreet_main_cta_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Call to Action Options', 'arile-extra' ),
						'section' => 'consultstreet_theme_cta',
					),
				),
			
			    	
				'consultstreet_cta_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'arile-extra' ),
						'section'  => 'consultstreet_theme_cta',
					),
				),
				
				'consultstreet_cta_button_link' => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 10,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'arile-extra' ),
						'section'         => 'consultstreet_theme_cta',
					),
				),


			);

		}

	}

	new ConsultStreet_Customize_Homepage_Cta_Option();

endif;