<?php
/**
 * General Blog.
 *
 * @package     designexo
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customize_Blog_General_Option' ) ) :

	/**
	 * General Blog..
	 */
	class Designexo_Customize_Blog_General_Option extends Designexo_Customize_Base_Option {

		public function elements() {

			return array(
			
			    'designexo_general_arcive_single_blog_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Blog/Archive/Single', 'designexo' ),
						'section' => 'designexo_blog_general',
					),
				),

				'designexo_general_blog_arcive_single_content_ordering' => array(
					'setting' => array(
						'default'           => array(
							'title',
							'meta',
							'content',
						),
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'description' => esc_html__( 'Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'designexo' ),
						'section'     => 'designexo_blog_general',
						'choices'     => array(
							'title' => esc_attr__( 'Title', 'designexo' ),
							'meta'          => esc_attr__( 'Meta', 'designexo' ),
							'content'           => esc_attr__( 'Content', 'designexo' ),
						),
					),
				), 
				
				'designexo_general_meta_date_disable'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 6,
						'label'    => esc_html__( 'Meta Date Enable/Disable', 'designexo' ),
						'section'  => 'designexo_blog_general',
					),
				),
				
				'designexo_archive_blog_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 15,
						'label'   => esc_html__( 'Archive Blog Pages', 'designexo' ),
						'section' => 'designexo_blog_general',
					),
				),  
				
				
					'designexo_archive_blog_pages_layout' => array(
						'setting' => array(
							'default'           => 'designexo_right_sidebar',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio_image',
							'priority'        => 20,
							'label'           => esc_html__( 'Layout', 'designexo' ),
							'section'         => 'designexo_blog_general',
							'choices'         => array(
								'designexo_right_sidebar'   => DESIGNEXO_PARENT_INC_IMG_URI . '/theme-right-sidebar.png',
								'designexo_left_sidebar'   => DESIGNEXO_PARENT_INC_IMG_URI . '/theme-left-sidebar.png',
								'designexo_no_sidebar' => DESIGNEXO_PARENT_INC_IMG_URI . '/theme-fullwidth.png',
							),
						),
					),	
				
				'designexo_single_blog_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 30,
						'label'   => esc_html__( 'Single Blog Pages', 'designexo' ),
						'section' => 'designexo_blog_general',
					),
				),
				
				    'designexo_single_blog_pages_layout' => array(
						'setting' => array(
							'default'           => 'designexo_right_sidebar',
							'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio_image',
							'priority'        => 35,
							'label'           => esc_html__( 'Layout', 'designexo' ),
							'section'         => 'designexo_blog_general',
							'choices'         => array(
								'designexo_right_sidebar'   => DESIGNEXO_PARENT_INC_IMG_URI . '/theme-right-sidebar.png',
								'designexo_left_sidebar'   => DESIGNEXO_PARENT_INC_IMG_URI . '/theme-left-sidebar.png',
								'designexo_no_sidebar' => DESIGNEXO_PARENT_INC_IMG_URI . '/theme-fullwidth.png',
							),
						),
					),
					
					
				'designexo_custom_logo_size' => array(
					'setting' => array(
						'default'           => array(
							'slider' => 224,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'Designexo_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 55,
						'label'       => esc_html__( 'Logo Width', 'designexo' ),
						'section'     => 'title_tagline',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 600,
							'step' => 3,
						),
					),
				),
				

			);

		}

	}

	new Designexo_Customize_Blog_General_Option();

endif;
