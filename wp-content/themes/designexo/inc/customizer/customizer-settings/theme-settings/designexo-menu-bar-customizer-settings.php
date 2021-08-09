<?php
/**
 * MenuBar.
 *
 * @package designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Menu_Bar_Option' ) ) :

	/**
	 * Menu option.
	 */
	class Designexo_Customize_Menu_Bar_Option extends Designexo_Customize_Base_Option {

		public function elements() {

			return array(
			
			    'designexo_main_menu_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Menu Settings', 'designexo' ),
						'section' => 'designexo_theme_menu_bar',
					),
				),


					'designexo_menu_style' => array(
						'setting' => array(
							'default'           => 'sticky',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 5,
							'is_default_type' => true,
							'label'           => esc_html__( 'Menu Style', 'designexo' ),
							'section'         => 'designexo_theme_menu_bar',
							'choices'         => array(
								'sticky'  => esc_html__( 'Sticky', 'designexo' ),
								'static' => esc_html__( 'Static', 'designexo' ),
							),
						),
					),	
					
					
					'designexo_menu_container_size' => array(
						'setting' => array(
							'default'           => 'container',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 7,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'designexo' ),
							'section'         => 'designexo_theme_menu_bar',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'designexo' ),
								'container-full' => esc_html__( 'Container Full', 'designexo' ),
							),
						),
			     	),	

			);

		}

	}

	new Designexo_Customize_Menu_Bar_Option();

endif;