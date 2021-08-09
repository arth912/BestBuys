<?php
/**
 * Footer widgets. 
 *
 * @package     designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Footer_Widget_Option' ) ) :

	/**
	 * Option: Footer widget.
	 */
	class Designexo_Customize_Footer_Widget_Option extends Designexo_Customize_Base_Option {

		public function elements() {

			return array(

				'designexo_footer_widgets_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Footer Widget Area Enable/Disable', 'designexo' ),
						'section'  => 'designexo_footer_widgets',
					),
				),		
								
				'designexo_footer_container_size' => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 25,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'designexo' ),
							'section'         => 'designexo_footer_widgets',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'designexo' ),
								'container-full' => esc_html__( 'Container Full', 'designexo' ),
							),
						),
				),	
				
				

			);

		}

	}

	new Designexo_Customize_Footer_Widget_Option();

endif;
