<?php
/**
 * Extend customizer section.
 *
 * @package arile-extra
 *
 * @see     WP_Customize_Section
 * @access  public
 */
 
function arileextra_consultstreet_frontpage_sections_settings( $wp_customize ){
	

	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	
		// Services
	$activate_theme_data = wp_get_theme(); // getting current theme data
	$activate_theme = $activate_theme_data->name;
	
	if('ConsultStreet' == $activate_theme || 'BrightPress' == $activate_theme || 'AssentPress' == $activate_theme){				
		$ctaimage = 'theme-cta-bg';
	}
	if('FitnessBase' == $activate_theme){
		$page_editor_path = trailingslashit( arile_extra_plugin_dir ) . '/inc/consultstreet/customizer/customizer-page-editor/customizer-page-editor.php';
		if ( file_exists( $page_editor_path ) ) { require_once( $page_editor_path ); }
		$ctaimage = 'theme-cta-bg1';
		
						
			if ( class_exists( 'ConsultStreet_Page_Editor' ) ) {				
				$default = '<section class="theme-block theme-about"><div class="container"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><figure class="about-thumbnail"><img src="'.arile_extra_plugin_url.'/inc/consultstreet/images/about-img-1.png" class="img-fluid" alt="About ConsultStreet" /></figure></div><div class="col-lg-6 col-md-6 col-sm-12 align-self-center"><div class="theme-about-block"><h5 class="mb-3 text-default">Welcome to Fitness Base</h5><h2 class="mb-3">Everything is Possible With Us</h2><p>Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit. Aliquam vel nulla eleifend, consequat elit id, tristique massdolor velit, blandi.</p><p>Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit.</p><div class="pt-3"><a href="#" class="btn-small btn-default-dark">Read More</a></div></div></div></div></div></div></div></section>';
				$wp_customize->add_setting(
					'consultstreet_service_area_before_content', array(
						'default'           => $default,
						'sanitize_callback' => 'wp_kses_post',
					)
				);

				$wp_customize->add_control(
					new ConsultStreet_Page_Editor(
						$wp_customize, 'consultstreet_service_area_before_content', array(
							'label'    => esc_html__( 'About Section Content', 'consultstreet' ),
							'section'  => 'consultstreet_theme_service',
							'priority' => 15,
							'needsync' => true,
						)
					)
				);
			}
		
		
	}
			
	/* Register frontpage panel */
	$wp_customize->add_panel( 'consultstreet_frontpage_settings', array(
		'priority'       => 25,
		'capability'     => 'edit_theme_options',
		'title'      => __('Frontpage Sections', 'arile-extra'),
	) );
	
	/* Site Top Header */
	$wp_customize->add_section( 'consultstreet_theme_top_header_area' , array(
		'title'      => __('Site Top Header', 'consultstreet'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 1,
	) );
	
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_top_header_info_content', array( ) );
			$wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_top_header_info_content', array(
				'label'                             => esc_html__( 'Info Items Content', 'consultstreet' ),
				'section'                           => 'consultstreet_theme_top_header_area',
				'add_field_label'                   => esc_html__( 'Add new info', 'consultstreet' ),
				'item_name'                         => esc_html__( 'Info Item', 'consultstreet' ),
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
                'customizer_repeater_checkbox_control' => true,
			    ) ) );
		}
	
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_top_header_social_content', array( ) );
			$wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_top_header_social_content', array(
						'label'                            => esc_html__( 'Social Items Content', 'consultstreet' ),
						'section'                          => 'consultstreet_theme_top_header_area',
						'add_field_label'                  => esc_html__( 'Add new icon', 'consultstreet' ),
						'item_name'                        => esc_html__( 'Social Icon', 'consultstreet' ),
						'customizer_repeater_icon_control'  => true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_checkbox_control' => true,
					)
				)
			);
		}
	
	/* Slider */
	$wp_customize->add_section( 'consultstreet_main_theme_slider' , array(
		'title'      => __('Main Slider', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 2,
   	) ); 
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_main_slider_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_main_theme_slider',
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
		
	/* Info Area */
	$wp_customize->add_section( 'consultstreet_theme_info_area' , array(
		'title'      => __('Theme Info Area', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 3,
   	) ); 		
			
        if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_theme_info_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_theme_info_content', array(
				'label'                             => esc_html__( 'Info Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_info_area',
				'add_field_label'                   => esc_html__( 'Add new info', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Info Item', 'arile-extra' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_link_control'  => true,
                'customizer_repeater_checkbox_control' => true,
				) ) );
		}
			
	/* Service */
	$wp_customize->add_section( 'consultstreet_theme_service' , array(
		'title'      => __('Service', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 4,
	) ); 
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_service_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_service_content', array(
				'label'                             => esc_html__( 'Service Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_service',
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
	$wp_customize->add_section( 'consultstreet_theme_project' , array(
		'title'      => __('Project', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 5,
	) );
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_project_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_project_content', array(
				'label'                             => esc_html__( 'Project Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_project',
				'priority'                          => 50,
				'add_field_label'                   => esc_html__( 'Add new project item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Project Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}
	
	
   /* Testimonial */
	$wp_customize->add_section( 'consultstreet_theme_testimonial' , array(
		'title'      => __('Testimonial', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 7,
	) ); 
	
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_testimonial_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new testimonial item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}
			
	/* Cta */
	$wp_customize->add_section( 'consultstreet_theme_cta' , array(
		'title'      => __('Call to action', 'consultstreet'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 9,
	) ); 
	
	
	        //Cta Background Image
			$wp_customize->add_setting( 'consultstreet_cta_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			  'default' => arile_extra_plugin_url . '/inc/consultstreet/images/'.$ctaimage.'.jpg',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'consultstreet_cta_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'consultstreet' ),
			  'section'  => 'consultstreet_theme_cta',
			  'settings' => 'consultstreet_cta_background_image',
			  'priority'        => 15,
			) ) );			
			
	
    /* Blog */
	$wp_customize->add_section( 'consultstreet_theme_blog' , array(
		'title'      => __('Blog', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 11,
	) ); 
	
	    $wp_customize->add_setting( 'consultstreet_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
	    $wp_customize->add_control( new ConsultStreet_Customize_Category_Control( $wp_customize, 'consultstreet_theme_blog_category', array(
			'label'   => __('Choose Blog Category','arile-extra'),
			'section' => 'consultstreet_theme_blog',
			'settings'   => 'consultstreet_theme_blog_category',
			'sanitize_callback' => 'sanitize_text_field',
		) ) );

}
add_action( 'customize_register', 'arileextra_consultstreet_frontpage_sections_settings' );


function arileextra_consultstreet_customizer_selective_refresh_settings($wp_customize) {
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	// Services
	$activate_theme_data = wp_get_theme(); // getting current theme data
	$activate_theme = $activate_theme_data->name;
	
	if('ConsultStreet' == $activate_theme || 'BrightPress' == $activate_theme || 'AssentPress' == $activate_theme){				
		$stitle = 'Our Services';
		$sdescription = 'We provide the worlds best consulting related services to growth your business.';
		$ptitle = 'Our Latest Projects';
        $pdescription = 'We provide you with a beautiful working place that your work is productive to growth your business.';
		$ctitle = 'Do you have any questions?';
		$cdescription = 'How can we help your business? Because many people love our free consultation for growing their businesses which gives the user complete freedom to set up a business.';
		$cbutton = 'Contact Us';
		$ctaimage = 'theme-cta-bg';
	}
	if('FitnessBase' == $activate_theme){
		$stitle = 'Set High Fitness Goals';
		$sdescription = 'After you decide to start training we will make sure you get the best fitness.';	
		$ptitle = 'Training Programs';
        $pdescription = 'Let us take your workout routines to the next level with our full-body programs and intensity challenges.';
		$ctitle = 'FITNESS CLASSES THIS SUMMER.';
		$cdescription = '<h3> PAY NOW AND GET 35% DISCOUNT </h3>';
		$cbutton = 'BECOME A MEMBER';
		$ctaimage = 'theme-cta-bg1';
	}

		$wp_customize->add_setting( 'consultstreet_service_area_title',
		array(
            'default' => __(''.$stitle.'','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_service_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_service',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'consultstreet_service_area_des',
		array(
            'default' => __(''.$sdescription.'','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_service_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_service',
			'priority'        => 5,
			'type' => 'textarea',
		));	
		
	
    // Project
	
		$wp_customize->add_setting( 'consultstreet_project_area_title',
		array(
            'default' => __(''.$ptitle.'','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_project_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_project',
			'priority'        => 15,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'consultstreet_project_area_des',
		array(
            'default' => __(''.$pdescription.'','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_project_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_project',
			'priority'        => 20,
			'type' => 'textarea',
		));
		

	// Testimonial
	
		$wp_customize->add_setting( 'consultstreet_testimonial_area_title',
		array(
            'default' => __('Testimonials','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_testimonial_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_testimonial',
			'priority'        => 4,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'consultstreet_testimonial_area_des',
		array(
            'default' => __('What our customers are saying about us after using our products.','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_testimonial_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_testimonial',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		
	// Blog
	
		$wp_customize->add_setting( 'consultstreet_blog_area_title',
		array(
            'default' => __('Latest News','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_blog_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_blog',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'consultstreet_blog_area_des',
		array(
            'default' => __('Stay updated with the latest news by reading our articles written by content writers in the industry.','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_blog_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_blog',
			'priority'        => 5,
			'type' => 'textarea',
    	));
		
		// Call to action
	
		$wp_customize->add_setting( 'consultstreet_cta_area_subtitle',
		array(
            'default' => ''.$ctitle.'',
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_cta_area_subtitle',
		array(
			'label'   => esc_html__( 'Title', 'consultstreet' ),
			'section' => 'consultstreet_theme_cta',
			'priority'        => 5,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'consultstreet_cta_area_des',
		array(
            'default' => ''.$cdescription.'',
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_cta_area_des',
		array(
			'label'   => esc_html__( 'Description', 'consultstreet' ),
			'section' => 'consultstreet_theme_cta',
			'priority'        => 6,
			'type' => 'textarea',
		));	
		
		$wp_customize->add_setting( 'consultstreet_cta_button_text',
		array(
            'default' => ''.$cbutton.'',
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_cta_button_text',
		array(
			'label'   => esc_html__( 'Button Text', 'consultstreet' ),
			'section' => 'consultstreet_theme_cta',
			'priority'        => 10,
			'type' => 'text',
		));
		
}
add_action( 'customize_register', 'arileextra_consultstreet_customizer_selective_refresh_settings' );