<?php
/**
 * Page Header Settings.
 *
 * @package designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Page Header Settings.
*/

if ( ! class_exists( 'Designexo_Customize_Page_Header_Option' ) ) :

	class Designexo_Customize_Page_Header_Option extends Designexo_Customize_Base_Option {

		public function elements() {

			return array(
			
			
			    'designexo_page_header_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Page Header', 'designexo' ),
						'section' => 'header_image',
					),
				),
			
				'designexo_page_header_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Page Header Enable/Disable', 'designexo' ),
						'section'  => 'header_image',
					),
				),
				
				
				'designexo_page_header_background_color' => array(
					'setting' => array(
						'default'           => 'rgba(0, 0, 0, .30)',
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 7,
						'label'           => esc_html__( 'Background color', 'designexo' ),
						'section'         => 'header_image',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),
			  

			);

		}

	}

	new Designexo_Customize_Page_Header_Option();

endif;
