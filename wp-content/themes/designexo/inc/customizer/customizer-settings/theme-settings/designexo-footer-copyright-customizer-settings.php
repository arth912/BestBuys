<?php
/**
 * Footer Copyright.
 *
 * @package     designexo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Footer_Copyright_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class Designexo_Customize_Footer_Copyright_Option extends Designexo_Customize_Base_Option {

		public function elements() {

			return array(

				'designexo_footer_copright_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Footer Copyright Enable/Disable', 'designexo' ),
						'section'  => 'designexo_footer_copyright',
					),
				),		
				
				
			);

		}

	}

	new Designexo_Customize_Footer_Copyright_Option();

endif;
