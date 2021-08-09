<?php
/**
 * General Settings.
 *
 * @package designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* General Settings.
*/

if ( ! class_exists( 'Designexo_Customize_General_Option' ) ) :

	class Designexo_Customize_General_Option extends Designexo_Customize_Base_Option {
		
		public function elements() {

			return array(
			
			
			    'designexo_general_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'General Settings', 'designexo' ),
						'section' => 'designexo_theme_general',
					),
				),
			
					'designexo_animation_disabled'            => array(
						'setting' => array(
							'default'           => true,
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 2,
							'label'    => esc_html__( 'Site Animation Enable/Disable', 'designexo' ),
							'section'  => 'designexo_theme_general',
						),
					),

			);

		}

	}

	new Designexo_Customize_General_Option();

endif;
