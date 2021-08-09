<?php
/**
 * Typography. 
 * @package     designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if ( ! class_exists( 'Designexo_Customize_Theme_Typography_Option' ) ) :

	/**
	 * Theme Typography option.
	 */
	class Designexo_Customize_Theme_Typography_Option extends Designexo_Customize_Base_Option {

		public function elements() {

			return array(
			
/* ---------- Enable/Disable TYPOGRAPHY -------------- */		
			
			    'designexo_typography_disabled' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Typography', 'designexo' ),
						'section'  => 'designexo_enable_disable_typography',
					),
				),	
            				

			);

		}

	}

	new Designexo_Customize_Theme_Typography_Option();

endif;
