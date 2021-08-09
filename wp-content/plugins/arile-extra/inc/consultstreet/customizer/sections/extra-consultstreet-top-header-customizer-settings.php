<?php
/**
 * Frontpage Site Top Header.
 *
 * @package consultstreet
 */

defined( 'ABSPATH' ) || exit;

/**
* Site Top Header customizer options.
*/
if ( ! class_exists( 'ConsultStreet_Customize_Homepage_Site_Top_Header_Option' ) ) :

	class ConsultStreet_Customize_Homepage_Site_Top_Header_Option extends ConsultStreet_Customize_Base_Option {

		/**
		 * @return array
		 */
		public function elements() {

			return array(
			
			    'consultstreet_site_top_header_content_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Top Header Options', 'consultstreet' ),
						'section' => 'consultstreet_theme_top_header_area',
					),
				),
			
				'consultstreet_site_top_header_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Header Enable/Disable', 'consultstreet' ),
						'section'  => 'consultstreet_theme_top_header_area',
					),
				),
				
			    'consultstreet_site_top_header_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Info Enable/Disable', 'consultstreet' ),
						'section'  => 'consultstreet_theme_top_header_area',
					),
				),
				
			    'consultstreet_site_top_header_social_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 4,
						'label'    => esc_html__( 'Social Icon Enable/Disable', 'consultstreet' ),
						'section'  => 'consultstreet_theme_top_header_area',
					),
				),

                'consultstreet_top_header_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 20,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'consultstreet' ),
							'section'         => 'consultstreet_theme_top_header_area',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'consultstreet' ),
								'container-full' => esc_html__( 'Container Full', 'consultstreet' ),
							),
						),
			    ),	
				
				'consultstreet_top_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 10,
						'label'    => esc_html__( 'Top Header Info', 'arile-extra' ),
						'section'  => 'consultstreet_theme_top_header_area',
					),
				),
				
				'consultstreet_social_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 19,
						'label'    => esc_html__( 'Social Icons', 'arile-extra' ),
						'section'  => 'consultstreet_theme_top_header_area',
					),
				),
											
			

			);

		}

	}

	new ConsultStreet_Customize_Homepage_Site_Top_Header_Option();

endif;