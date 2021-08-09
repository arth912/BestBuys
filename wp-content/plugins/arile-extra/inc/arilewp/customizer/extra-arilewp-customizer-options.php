<?php
/**
 * Extend customizer section.
 *
 * @package arile-extra
 *
 * @see     WP_Customize_Section
 * @access  public
 */
 
function arileextra_arilewp_frontpage_sections_settings( $wp_customize ){
	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
			
	/* Register frontpage panel */
	$wp_customize->add_panel( 'arilewp_frontpage_settings', array(
		'priority'       => 25,
		'capability'     => 'edit_theme_options',
		'title'      => __('Frontpage Sections', 'arile-extra'),
	) );
	
	/* Slider */
	$wp_customize->add_section( 'arilewp_main_theme_slider' , array(
		'title'      => __('Main Slider', 'arile-extra'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 2,
   	) ); 
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_main_slider_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'arile-extra' ),
				'section'                           => 'arilewp_main_theme_slider',
				'add_field_label'                   => esc_html__( 'Add new slide item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Slide Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}
	
	$activate_theme_data = wp_get_theme(); // getting current theme data
    $activate_theme = $activate_theme_data->name;
	
if('NewYork City' != $activate_theme && 'InteriorPress' != $activate_theme){
	/* Info Area */
	$wp_customize->add_section( 'arilewp_theme_info_area' , array(
		'title'      => __('Theme Info Area', 'arile-extra'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 3,
   	) ); 		
			
        if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_theme_info_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_theme_info_content', array(
				'label'                             => esc_html__( 'Theme Info Content', 'arile-extra' ),
				'section'                           => 'arilewp_theme_info_area',
				'add_field_label'                   => esc_html__( 'Add new theme info', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Theme Info', 'arile-extra' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
				) ) );
		}
	}	
			
	/* Service */
	$wp_customize->add_section( 'arilewp_theme_service' , array(
		'title'      => __('Service', 'arile-extra'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 4,
	) ); 
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_service_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_service_content', array(
				'label'                             => esc_html__( 'Service Items Content', 'arile-extra' ),
				'section'                           => 'arilewp_theme_service',
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
	$wp_customize->add_section( 'arilewp_theme_project' , array(
		'title'      => __('Project', 'arile-extra'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 5,
	) );
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_project_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_project_content', array(
				'label'                             => esc_html__( 'Project Items Content', 'arile-extra' ),
				'section'                           => 'arilewp_theme_project',
				'priority'                          => 50,
				'add_field_label'                   => esc_html__( 'Add new project item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Project Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}
	
	
   /* Testimonial */
	$wp_customize->add_section( 'arilewp_theme_testimonial' , array(
		'title'      => __('Testimonial', 'arile-extra'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 7,
	) ); 
	
	
	    if ( class_exists( 'ArileWP_Repeater' ) ) {
			$wp_customize->add_setting( 'arilewp_testimonial_content', array( ) );
            $wp_customize->add_control( new ArileWP_Repeater( 
			$wp_customize, 'arilewp_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'arile-extra' ),
				'section'                           => 'arilewp_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new testimonial item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}
			
		    //Testimonial Background Image
			$wp_customize->add_setting( 'arilewp_testomonial_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			  'default'           => '',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arilewp_testomonial_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'arile-extra' ),
			  'section'  => 'arilewp_theme_testimonial',
			  'settings' => 'arilewp_testomonial_background_image',
			  'priority'        => 33,
			) ) );
	
    /* Blog */
	$wp_customize->add_section( 'arilewp_theme_blog' , array(
		'title'      => __('Blog', 'arile-extra'),
		'panel'  => 'arilewp_frontpage_settings',
		'priority'   => 11,
	) ); 
	
	    $wp_customize->add_setting( 'arilewp_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
	    $wp_customize->add_control( new ArileWP_Customize_Category_Control( $wp_customize, 'arilewp_theme_blog_category', array(
			'label'   => __('Choose Blog Category','arile-extra'),
			'section' => 'arilewp_theme_blog',
			'settings'   => 'arilewp_theme_blog_category',
			'sanitize_callback' => 'sanitize_text_field',
		) ) );

}
add_action( 'customize_register', 'arileextra_arilewp_frontpage_sections_settings' );


function arileextra_arilewp_customizer_selective_refresh_settings($wp_customize) {
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	// Services

		$wp_customize->add_setting( 'arilewp_service_area_title',
		array(
            'default' => __('Our Services','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_service_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'arilewp_theme_service',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_service_area_des',
		array(
            'default' => __('<b>We provide the</b> best services','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_service_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'arilewp_theme_service',
			'priority'        => 5,
			'type' => 'textarea',
		));	
		
	
    // Project
	
		$wp_customize->add_setting( 'arilewp_project_area_title',
		array(
            'default' => __('Our Portfolio','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_project_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'arilewp_theme_project',
			'priority'        => 15,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'arilewp_project_area_des',
		array(
            'default' => __('<b>Recent</b> Projects','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_project_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'arilewp_theme_project',
			'priority'        => 20,
			'type' => 'textarea',
		));
		

	// Testimonial
	
		$wp_customize->add_setting( 'arilewp_testimonial_area_title',
		array(
            'default' => __('Testimonials','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_testimonial_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'arilewp_theme_testimonial',
			'priority'        => 4,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'arilewp_testimonial_area_des',
		array(
            'default' => __('<b>What clients</b>  are say','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_testimonial_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'arilewp_theme_testimonial',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		
	// Blog
	
		$wp_customize->add_setting( 'arilewp_blog_area_title',
		array(
            'default' => __('Recent Updates','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_blog_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'arilewp_theme_blog',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'arilewp_blog_area_des',
		array(
            'default' => __('<b>Our Latest</b> News','arile-extra'),
			'sanitize_callback' => 'arilewp_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'arilewp_blog_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'arilewp_theme_blog',
			'priority'        => 5,
			'type' => 'textarea',
    	));
		
		
}
add_action( 'customize_register', 'arileextra_arilewp_customizer_selective_refresh_settings' );