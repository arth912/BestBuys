<?php
/**
 *
 * @package arile-extra
 */
			

if ( ! function_exists( 'arileextra_arilewp_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_arilewp_main_slider_default_content( $wp_customize ){
			

		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
		
		
		if('ArileWP' == $activate_theme || 'Business Street' == $activate_theme || 'ArileWP Child Theme' == $activate_theme ){
			$image1_slide = 1;
			$image2_slide = 2;
		}
		if('StrangerWP' == $activate_theme){
				$image1_slide = 7;
				$image2_slide = 8;
		}
		if('NewYork City' == $activate_theme){	
				$image1_slide = 3;
				$image2_slide = 4;
		}
		if('InteriorPress' == $activate_theme){
				$image1_slide = 5;
				$image2_slide = 6;
		}
		if('Architect Design' == $activate_theme){
				$image1_slide = 9;
				$image2_slide = 10;
		}
		if('Ariletech' == $activate_theme){
				$image1_slide = 11;
				$image2_slide = 12;
		}
			
			if('InteriorPress' == $activate_theme){	
				$slide1_title = 'ELEGANT & COMFORTABLE';
				$slide2_title = 'AWARD WINNINGS DESIGN';							
		    }
			elseif('Architect Design' == $activate_theme){	
				$slide1_title = 'ARCHITECTRE & DESIGN';
				$slide2_title = 'INTERIOR & DESIGN';							
		    }
			elseif('Ariletech' == $activate_theme){	
				$slide1_title = 'Best Business Agency Company For Your Business';
				$slide2_title = 'We Provide Best Digital Marketing Solutions';							
		    }
			else{
			    $slide1_title = 'We Create Amazing WordPress Themes';
				$slide2_title = 'Best Digital Marketing Solutions';			
			}
				
					$arilewp_main_slider_data = $wp_customize->get_setting( 'arilewp_main_slider_content' );
						if ( ! empty( $arilewp_main_slider_data ) ) {
						$arilewp_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( ''.$slide1_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-slide'.$image1_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( ''.$slide2_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-slide'.$image2_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
		}
add_action( 'customize_register', 'arileextra_arilewp_main_slider_default_content' );
endif;

/* Theme info content  */
if ( ! function_exists( 'arileextra_arilewp_theme_info_default_content' ) ) :		
    function arileextra_arilewp_theme_info_default_content( $wp_customize ){
			$arilewp_theme_info_data = $wp_customize->get_setting( 'arilewp_theme_info_content' );
				if ( ! empty( $arilewp_theme_info_data ) ) {
					$arilewp_theme_info_data->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-user-o',
						'title'      => esc_html__( 'Trusted Services', 'arile-extra' ),
						'text'       => esc_html__( 'We are trusted our customers', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-headphones',
						'title'      => esc_html__( '24/7 Support', 'arile-extra' ),
						'text'       => '014 1547 925 - 123 4567 890',
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Well Experienced', 'arile-extra' ),
						'text'       => esc_html__( '18 years of experience', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_arilewp_theme_info_default_content' );
endif;



/* Service content  */
if ( ! function_exists( 'arileextra_arilewp_service_default_content' ) ) :		
    function arileextra_arilewp_service_default_content( $wp_customize ){
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
			
			if('InteriorPress' == $activate_theme){				
				$service1_title = 'ARCHITECTURAL DESIGN';
				$service2_title = 'INTERIOR DESIGN';
				$service3_title = 'LIGHTING DESIGN';
                $choice = 'image';
                $simage1 = 1;	
                $simage2 = 2;	
                $simage3 = 3;					
		    }elseif('Architect Design' == $activate_theme){				
				$service1_title = 'ARCHITECTURAL DESIGN';
				$service2_title = 'HOUSE DECOR';
				$service3_title = 'PROJECT PLANNING';
                $choice = 'image';
                $simage1 = 4;	
                $simage2 = 5;	
                $simage3 = 6;				
		    }
			else{
                $service1_title = 'Pixel Perfect Design';
				$service2_title = 'WooCommerce Ready';
				$service3_title = 'Satisfied Clients';
                $choice = 'icon';
                $simage1 = 1;	
                $simage2 = 2;	
                $simage3 = 3;				
			}
		
			$arilewp_service_data = $wp_customize->get_setting( 'arilewp_service_content' );
				if ( ! empty( $arilewp_service_data ) ) {
					$arilewp_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( ''.$service1_title.'', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.',
						'button_text'      => __('Read More','arile-extra'),
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service'.$simage1.'.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( ''.$service2_title.'', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.',
						'button_text'      => __('Read More','arile-extra'),
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service'.$simage2.'.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( ''.$service3_title.'', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.',
						'button_text'      => __('Read More','arile-extra'),
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service'.$simage3.'.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_arilewp_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_arilewp_project_default_content' ) ) :		
	function arileextra_arilewp_project_default_content( $wp_customize ){
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
			
			if('InteriorPress' == $activate_theme){					
			    $project1_title = 'RESIDENTIAL DESIGN';
				$project2_title = 'COMMERCIAL DESIGN';
				$project3_title = 'HOUSING PROJECT';
				$project4_title = 'GLASS ART IN LONDON';
				$project1_image = 5;
				$project2_image = 6;
				$project3_image = 7;
				$project4_image = 8;				
		    }elseif('Architect Design' == $activate_theme){					
			    $project1_title = 'SOUTH AFRICA HOUSE';
				$project2_title = 'LIVING ROOM';
				$project3_title = 'PENTHOUSE MIAMI';
				$project4_title = 'MODULAR KITCHEN';
				$project1_image = 9;
				$project2_image = 10;
				$project3_image = 11;
				$project4_image = 12;				
		    }
			else{
				$project1_title = 'Business Resource';
				$project2_title = 'Business Consulting';
				$project3_title = 'App Development';
                $project4_title = 'Marketing Strategy';	
				$project1_image = 1;
				$project2_image = 2;
				$project3_image = 3;
				$project4_image = 4;				
			}
		
					$arilewp_project_data = $wp_customize->get_setting( 'arilewp_project_content' );
					if ( ! empty( $arilewp_project_data ) ) 
					{ $arilewp_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project1_image.'.jpg',
						'title'      => __(''.$project1_title.'','arile-extra'),
						'text'       => __('Business Solutions','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project2_image.'.jpg',
						'title'      => __(''.$project2_title.'','arile-extra'),
						'text'       => __('Consultant','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project3_image.'.jpg',
						'title'      => __(''.$project3_title.'','arile-extra'),
						'text'       => __('Online Store','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project'.$project4_image.'.jpg',
						'title'      => __(''.$project4_title.'','arile-extra'),
						'text'       => __('Digital Marketing','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_arilewp_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_arilewp_testimonial_default_content' ) ) :		
	function arileextra_arilewp_testimonial_default_content( $wp_customize ){
					$arilewp_testimonial_data = $wp_customize->get_setting( 'arilewp_testimonial_content' );
					if ( ! empty( $arilewp_testimonial_data ) ) 
					{
					$arilewp_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_arilewp_testimonial_default_content' );
endif;