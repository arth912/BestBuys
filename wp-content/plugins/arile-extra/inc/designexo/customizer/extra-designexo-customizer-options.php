<?php
/**
 * Extend customizer section.
 *
 * @package arile-extra
 *
 * @see     WP_Customize_Section
 * @access  public
 */
 
function arileextra_designexo_frontpage_sections_settings( $wp_customize ){
	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	
	$activate_theme_data = wp_get_theme(); // getting current theme data
	$activate_theme = $activate_theme_data->name;
			
	/* Register frontpage panel */
	$wp_customize->add_panel( 'designexo_frontpage_settings', array(
		'priority'       => 25,
		'capability'     => 'edit_theme_options',
		'title'      => __('Frontpage Sections', 'arile-extra'),
	) );
	
	/* Slider */
	$wp_customize->add_section( 'designexo_main_theme_slider' , array(
		'title'      => __('Main Slider', 'arile-extra'),
		'panel'  => 'designexo_frontpage_settings',
		'priority'   => 2,
   	) ); 
	
	    if ( class_exists( 'Designexo_Repeater' ) ) {
			$wp_customize->add_setting( 'designexo_main_slider_content', array( ) );
            $wp_customize->add_control( new Designexo_Repeater( 
			$wp_customize, 'designexo_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'arile-extra' ),
				'section'                           => 'designexo_main_theme_slider',
				'add_field_label'                   => esc_html__( 'Add new slide item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Slide Item', 'arile-extra' ),
				'customizer_repeater_subtitle_control' => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}	
	
	if ( 'Architect Decor' != $activate_theme ){
	
		/* Info Area */
		$wp_customize->add_section( 'designexo_theme_info_area' , array(
			'title'      => __('Theme Info Area', 'arile-extra'),
			'panel'  => 'designexo_frontpage_settings',
			'priority'   => 3,
		) ); 		
				
			if ( class_exists( 'Designexo_Repeater' ) ) {
				$wp_customize->add_setting( 'designexo_theme_info_content', array( ) );
				$wp_customize->add_control( new Designexo_Repeater( 
				$wp_customize, 'designexo_theme_info_content', array(
					'label'                             => esc_html__( 'Info Items Content', 'arile-extra' ),
					'section'                           => 'designexo_theme_info_area',
					'add_field_label'                   => esc_html__( 'Add new info', 'arile-extra' ),
					'item_name'                         => esc_html__( 'Info Item', 'arile-extra' ),
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text_control'  => true,
					'customizer_repeater_icon_control'  => true,
					) ) );
			}
    }	
		
			
	/* Service */
	$wp_customize->add_section( 'designexo_theme_service' , array(
		'title'      => __('Service', 'arile-extra'),
		'panel'  => 'designexo_frontpage_settings',
		'priority'   => 4,
	) ); 
	
	    if ( class_exists( 'Designexo_Repeater' ) ) {
			$wp_customize->add_setting( 'designexo_service_content', array( ) );
            $wp_customize->add_control( new Designexo_Repeater( 
			$wp_customize, 'designexo_service_content', array(
				'label'                             => esc_html__( 'Service Items Content', 'arile-extra' ),
				'section'                           => 'designexo_theme_service',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new service item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Service Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}

	
	
    /* Project */
	$wp_customize->add_section( 'designexo_theme_project' , array(
		'title'      => __('Project', 'arile-extra'),
		'panel'  => 'designexo_frontpage_settings',
		'priority'   => 5,
	) );
	
	    if ( class_exists( 'Designexo_Repeater' ) ) {
			$wp_customize->add_setting( 'designexo_project_content', array( ) );
            $wp_customize->add_control( new Designexo_Repeater( 
			$wp_customize, 'designexo_project_content', array(
				'label'                             => esc_html__( 'Project Items Content', 'arile-extra' ),
				'section'                           => 'designexo_theme_project',
				'priority'                          => 50,
				'add_field_label'                   => esc_html__( 'Add new project item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Project Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}
	
	
   /* Testimonial */
	$wp_customize->add_section( 'designexo_theme_testimonial' , array(
		'title'      => __('Testimonial', 'arile-extra'),
		'panel'  => 'designexo_frontpage_settings',
		'priority'   => 7,
	) ); 
	
	
	    if ( class_exists( 'Designexo_Repeater' ) ) {
			$wp_customize->add_setting( 'designexo_testimonial_content', array( ) );
            $wp_customize->add_control( new Designexo_Repeater( 
			$wp_customize, 'designexo_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'arile-extra' ),
				'section'                           => 'designexo_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new testimonial item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}
		
			//Testimonial Background Image
			$wp_customize->add_setting( 'designexo_testomonial_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			  'default'           => '',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'designexo_testomonial_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'arile-extra' ),
			  'section'  => 'designexo_theme_testimonial',
			  'settings' => 'designexo_testomonial_background_image',
			  'priority'        => 33,
			) ) );
	
    /* Blog */
	$wp_customize->add_section( 'designexo_theme_blog' , array(
		'title'      => __('Blog', 'arile-extra'),
		'panel'  => 'designexo_frontpage_settings',
		'priority'   => 11,
	) ); 
	
	    $wp_customize->add_setting( 'designexo_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
	    $wp_customize->add_control( new Designexo_Customize_Category_Control( $wp_customize, 'designexo_theme_blog_category', array(
			'label'   => __('Choose Blog Category','arile-extra'),
			'section' => 'designexo_theme_blog',
			'settings'   => 'designexo_theme_blog_category',
			'sanitize_callback' => 'sanitize_text_field',
		) ) );

}
add_action( 'customize_register', 'arileextra_designexo_frontpage_sections_settings' );


function arileextra_designexo_customizer_selective_refresh_settings($wp_customize) {
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

		$wp_customize->add_setting( 'designexo_service_area_title',
		array(
            'default' => __('Our Services','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_service_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'designexo_theme_service',
			'priority'        => 4,
			'type' => 'text',
		));	
		
	    $activate_theme_data = wp_get_theme(); // getting current theme data
		$activate_theme = $activate_theme_data->name;
		
		if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ $service_area_des = 'WE BUILD CREATIVE INTERIOR DESIGN'; }
		if('Empresa' == $activate_theme){ $service_area_des = 'We offer many services to growth'; }
		
		$wp_customize->add_setting( 'designexo_service_area_des',
		array(
            'default' => __(''.$service_area_des.'','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_service_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'designexo_theme_service',
			'priority'        => 5,
			'type' => 'textarea',
		));	
		
	
    // Project
	
		$wp_customize->add_setting( 'designexo_project_area_title',
		array(
            'default' => __('Our Portfolio','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_project_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'designexo_theme_project',
			'priority'        => 15,
			'type' => 'text',
		));	
		
		if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ $project_area_des = 'ALL INTERIOR DESIGN SOLUTIONS'; }
		if('Empresa' == $activate_theme){ $project_area_des = 'Our latest works'; }
			
		$wp_customize->add_setting( 'designexo_project_area_des',
		array(
            'default' => __(''.$project_area_des.'','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_project_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'designexo_theme_project',
			'priority'        => 20,
			'type' => 'textarea',
		));
		
		$wp_customize->add_setting( 'designexo_project_button_text',
		array(
            'default' => 'VIEW ALL PROJECTS',
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_project_button_text',
		array(
			'label'   => esc_html__( 'View All Button Text', 'arile-extra' ),
			'section' => 'designexo_theme_project',
			'priority'        => 60,
			'type' => 'text',
		));
		

	// Testimonial
	
		$wp_customize->add_setting( 'designexo_testimonial_area_title',
		array(
            'default' => __('Testimonials','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_testimonial_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'designexo_theme_testimonial',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ $testimonial_area_des = 'WHAT OUR CLIENTS SAY ABOUT US'; }
		if('Empresa' == $activate_theme){ $testimonial_area_des = 'Happy clients say'; }
			
		$wp_customize->add_setting( 'designexo_testimonial_area_des',
		array(
            'default' => __(''.$testimonial_area_des.'','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_testimonial_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'designexo_theme_testimonial',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		
	// Blog
	
		$wp_customize->add_setting( 'designexo_blog_area_title',
		array(
            'default' => __('Recent Updates','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_blog_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'designexo_theme_blog',
			'priority'        => 4,
			'type' => 'text',
		));

		$wp_customize->add_setting( 'designexo_blog_area_des',
		array(
            'default' => __('Our latest news','arile-extra'),
			'sanitize_callback' => 'designexo_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'designexo_blog_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'designexo_theme_blog',
			'priority'        => 5,
			'type' => 'textarea',
    	));
}
add_action( 'customize_register', 'arileextra_designexo_customizer_selective_refresh_settings' );