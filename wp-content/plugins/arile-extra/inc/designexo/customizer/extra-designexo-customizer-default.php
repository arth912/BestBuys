<?php
/**
 *
 * @package arile-extra
 */	

if ( ! function_exists( 'arileextra_designexo_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_designexo_main_slider_default_content( $wp_customize ){
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
			
					$designexo_main_slider_data = $wp_customize->get_setting( 'designexo_main_slider_content' );
						if ( ! empty( $designexo_main_slider_data ) ) {
							
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Great Creative Designs', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide1.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Living Area Redesign', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('Architect Decor' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Great Creative Designs', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide5.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Living Area Redesign', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide6.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}

				if('Empresa' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'May your choices reflect your hopes, not your fears', 'arile-extra' ),
						'subtitle'       => esc_html__( 'What we think, we become', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide3.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Photography is the story I fail to put into words', 'arile-extra' ),
						'subtitle'       => esc_html__( 'I don’t trust words. I trust pictures', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide4.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				} 				
					
				}
		}
add_action( 'customize_register', 'arileextra_designexo_main_slider_default_content' );
endif;

/* Theme Info content  */
if ( ! function_exists( 'arileextra_designexo_theme_info_default_content' ) ) :		
    function arileextra_designexo_theme_info_default_content( $wp_customize ){
			$designexo_theme_info_content_control = $wp_customize->get_setting( 'designexo_theme_info_content' );
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
			
				if ( ! empty( $designexo_theme_info_content_control ) ) {
					
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-star-o',
						'title'      => esc_html__( 'Award Winning Solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Our unique offer', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'Exclusive 10 Years Warranty', 'arile-extra' ),
						'text'       => esc_html__( 'Whats included', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-home',
						'title'      => esc_html__( 'Modern Interior Projects', 'arile-extra' ),
						'text'       => esc_html__( 'See our works', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						array(
						'icon_value' => 'fa fa-pencil',
						'title'      => esc_html__( 'Get a personal estimate', 'arile-extra' ),
						'text'       => esc_html__( 'Contact us', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b26',
						),
					) );
				}
                if('Empresa' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Award winning solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-bitcoin',
						'title'      => esc_html__( 'Saving and strategy', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-bar-chart',
						'title'      => esc_html__( 'Online media marketing', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
					) );
				}				
					

				}
	    }
add_action( 'customize_register', 'arileextra_designexo_theme_info_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arileextra_designexo_service_default_content' ) ) :		
    function arileextra_designexo_service_default_content( $wp_customize ){
		
			$designexo_service_data = $wp_customize->get_setting( 'designexo_service_content' );
				if ( ! empty( $designexo_service_data ) ) {
					
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
					
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Architectural Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Exterior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}

				if('Empresa' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-file-text-o',
						'title'      => esc_html__( 'Great typography', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-language',
						'title'      => esc_html__( 'Translations', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-mobile',
						'title'      => esc_html__( 'Creative design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						array(
						'icon_value' => 'fa fa-globe',
						'title'      => esc_html__( 'SEO optimized', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b18',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Premium quality', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b19',
						),
						array(
						'icon_value' => 'fa fa-cog',
						'title'      => esc_html__( 'Live customizer', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b20',
						),
						
					) );
					
				}

				}
	    }
add_action( 'customize_register', 'arileextra_designexo_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_designexo_project_default_content' ) ) :		
	function arileextra_designexo_project_default_content( $wp_customize ){

					$designexo_project_data = $wp_customize->get_setting( 'designexo_project_content' );
					if ( ! empty( $designexo_project_data ) ) { 
					
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
					
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project1.jpg',
						'title'      => __('BEDROOM LIGHTING DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project2.jpg',
						'title'      => __('EXTERIOR RENOVATION','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project3.jpg',
						'title'      => __('ARCHITECTURE DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project4.jpg',
						'title'      => __('MODULAR KITCHEN DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				if('Architect Decor' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project1.jpg',
						'title'      => __('BEDROOM LIGHTING DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project2.jpg',
						'title'      => __('EXTERIOR RENOVATION','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project3.jpg',
						'title'      => __('ARCHITECTURE DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),
						
					) );
				}
				if('Empresa' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project5.jpg',
						'title'      => __('Adventures','arile-extra'),
						'text'       => __('Mountain climbing','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project6.jpg',
						'title'      => __('Photography portfolio','arile-extra'),
						'text'       => __('Illustration','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project7.jpg',
						'title'      => __('Fashion store','arile-extra'),
						'text'       => __('Fashion photography','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project8.jpg',
						'title'      => __('Tour & travels','arile-extra'),
						'text'       => __('Entertainment','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
					
					
				}
        }
add_action( 'customize_register', 'arileextra_designexo_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_designexo_testimonial_default_content' ) ) :		
	function arileextra_designexo_testimonial_default_content( $wp_customize ){
				$designexo_testimonial_data = $wp_customize->get_setting( 'designexo_testimonial_content' );
				if ( ! empty( $designexo_testimonial_data ) ) 
				{			
					$designexo_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
				}
        }
add_action( 'customize_register', 'arileextra_designexo_testimonial_default_content' );
endif;