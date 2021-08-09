<?php
/**
 *
 * @package arile-extra
 */	

/* Top header content  */
if ( ! function_exists( 'consultstreet_theme_top_header_default_content' ) ) :		
    function consultstreet_theme_top_header_default_content( $wp_customize ){
			$consultstreet_theme_top_header_content_control = $wp_customize->get_setting( 'consultstreet_top_header_info_content' );
				if ( ! empty( $consultstreet_theme_top_header_content_control ) ) {
					$consultstreet_theme_top_header_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-clock-o',
						'text'       => esc_html__( 'Mon - Sat 8.00 - 18.00. Sunday CLOSED', 'consultstreet' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b37',
						),
						array(
						'icon_value' => 'fa fa-phone',
						'text'       => '+14 1-800-1234-567',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b47',
						),
						array(
						'icon_value' => 'fa fa-envelope-o',
						'text'       => esc_html__( 'info@consultstreet.com', 'consultstreet' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'consultstreet_theme_top_header_default_content' );
endif; 

/* Top header social icons  */
if ( ! function_exists( 'consultstreet_theme_header_social_default_content' ) ) :		
    function consultstreet_theme_header_social_default_content( $wp_customize ){
			$consultstreet_theme_top_header_social_content_control = $wp_customize->get_setting( 'consultstreet_top_header_social_content' );
				if ( ! empty( $consultstreet_theme_top_header_social_content_control ) ) {
					$consultstreet_theme_top_header_social_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-facebook',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b37',
						),
						array(
						'icon_value' => 'fa fa-twitter',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b47',
						),
						array(
						'icon_value' => 'fa fa-google-plus',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						array(
						'icon_value' => 'fa fa-linkedin',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'consultstreet_theme_header_social_default_content' );
endif;

if ( ! function_exists( 'arileextra_consultstreet_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_consultstreet_main_slider_default_content( $wp_customize ){
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
			
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme){
					$image1_slide = 1;
					$image2_slide = 2;
					$slider1_title = 'Provide Quality Consulting Services';
					$slider2_title = 'Best Choice for Your Business';
				}
				if('BrightPress' == $activate_theme){
					$image1_slide = 3;
					$image2_slide = 2;
					$slider1_title = 'Provide Quality <span>Consulting Services</span>';
					$slider2_title = 'Best Choice for <span>Your Business</span>';
				}
				if('FitnessBase' == $activate_theme){
					$image1_slide = 5;
					$image2_slide = 6;
				    $slider1_title = 'Build Your <span>Body Strong</span>';
					$slider2_title = 'Challenge <span>Your Limits</span>';	
				} 
				
					$consultstreet_main_slider_data = $wp_customize->get_setting( 'consultstreet_main_slider_content' );
						if ( ! empty( $consultstreet_main_slider_data ) ) {
						$consultstreet_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( ''.$slider1_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image1_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( ''.$slider2_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image2_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
		}
add_action( 'customize_register', 'arileextra_consultstreet_main_slider_default_content' );
endif;

/* Theme Info content  */
if ( ! function_exists( 'arileextra_consultstreet_theme_info_default_content' ) ) :		
    function arileextra_consultstreet_theme_info_default_content( $wp_customize ){
			$consultstreet_theme_info_content_control = $wp_customize->get_setting( 'consultstreet_theme_info_content' );
				if ( ! empty( $consultstreet_theme_info_content_control ) ) {
					$consultstreet_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-user-o',
						'title'      => esc_html__( 'Expert Instruction', 'arile-extra' ),
						'text'       => esc_html__( 'Find the right instructor for you', 'arile-extra' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-headphones',
						'title'      => esc_html__( 'Premium Support', 'arile-extra' ),
						'text'       => '014 1547 925 - 123 4567 890',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Well Experienced', 'arile-extra' ),
						'text'       => esc_html__( '25 years of experience', 'arile-extra' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_consultstreet_theme_info_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arileextra_consultstreet_service_default_content' ) ) :		
    function arileextra_consultstreet_service_default_content( $wp_customize ){
		
			$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
		
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Corporate Finance';
					$service2_title = 'Consulting Service';
					$service3_title = 'Market Analysis';
					$choice = 'icon';
				}
				if('BrightPress' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Corporate Finance';
					$service2_title = 'Consulting Service';
					$service3_title = 'Market Analysis';
					$choice = 'icon';
				}
				if('FitnessBase' == $activate_theme){
					$service1_icon = 'fa-hand-grab-o';
					$service2_icon = 'fa-clock-o';
					$service3_icon = 'fa-sheqel';
					$service1_title = 'No Long-Term Contract';
					$service2_title = 'Exercise Round the Clock';
					$service3_title = 'Best Equipment';	
					$choice = 'image';
				} 
		
			$consultstreet_service_data = $wp_customize->get_setting( 'consultstreet_service_content' );
				if ( ! empty( $consultstreet_service_data ) ) {
					$consultstreet_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa '.$service1_icon.'',
						'title'      => esc_html__( ''.$service1_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa '.$service2_icon.'',
						'title'      => esc_html__( ''.$service2_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa '.$service3_icon.'',
						'title'      => esc_html__( ''.$service3_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_consultstreet_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_consultstreet_project_default_content' ) ) :		
	function arileextra_consultstreet_project_default_content( $wp_customize ){
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
		
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme){
					$project1_image = '1';
					$project2_image = '2';
					$project3_image = '3';
					$project4_image = '4';
					$project1_title = 'Business Planning';
					$project2_title = 'Planning For The Future';
					$project3_title = 'Growth Expansion';
					$project4_title = 'Sales Forecasting';
				}
				if('BrightPress' == $activate_theme){	
					$project1_image = '1';
					$project2_image = '2';
					$project3_image = '3';
					$project4_image = '4';
					$project1_title = 'Business Planning';
					$project2_title = 'Planning For The Future';
					$project3_title = 'Growth Expansion';
					$project4_title = 'Sales Forecasting';
				}
				if('FitnessBase' == $activate_theme){	
					$project1_image = '5';
					$project2_image = '6';
					$project3_image = '7';
					$project4_image = '8';
					$project1_title = 'Aerobics';
					$project2_title = 'Yoga Pilates';
					$project3_title = 'Active Kids';
					$project4_title = 'Strength Exercises';
				} 

					$consultstreet_project_data = $wp_customize->get_setting( 'consultstreet_project_content' );
					if ( ! empty( $consultstreet_project_data ) ) 
					{ $consultstreet_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project1_image.'.jpg',
						'title'      => __(''.$project1_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project2_image.'.jpg',
						'title'      => __(''.$project2_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project3_image.'.jpg',
						'title'      => __(''.$project3_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project4_image.'.jpg',
						'title'      => __(''.$project4_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_consultstreet_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_consultstreet_testimonial_default_content' ) ) :		
	function arileextra_consultstreet_testimonial_default_content( $wp_customize ){
				$consultstreet_testimonial_data = $wp_customize->get_setting( 'consultstreet_testimonial_content' );
				if ( ! empty( $consultstreet_testimonial_data ) ) 
				{			
				$activate_theme_data = wp_get_theme(); // getting current theme data
				$activate_theme = $activate_theme_data->name;
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme){
					$consultstreet_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),				
					) );
                }					
				if('BrightPress' == $activate_theme || 'FitnessBase' == $activate_theme){
					$consultstreet_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
				}
				}
        }
add_action( 'customize_register', 'arileextra_consultstreet_testimonial_default_content' );
endif;