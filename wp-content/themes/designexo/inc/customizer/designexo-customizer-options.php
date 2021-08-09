<?php
/**
 * Customizer section options.
 *
 * @package designexo
 *
 */

require DESIGNEXO_PARENT_INC_DIR . '/customizer/webfont.php';
require DESIGNEXO_PARENT_INC_DIR . '/customizer/controls/code/designexo-customize-typography-control.php';
require DESIGNEXO_PARENT_INC_DIR . '/customizer/controls/code/designexo-customize-category-control.php';
require DESIGNEXO_PARENT_INC_DIR . '/customizer/controls/code/designexo-customize-plugin-control.php';
require DESIGNEXO_PARENT_INC_DIR . '/customizer/customizer-repeater/functions.php';

function designexo_customizer_theme_settings( $wp_customize ){
	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	$wp_customize->get_section( 'header_image' )->panel = 'designexo_theme_settings';
	$wp_customize->get_section( 'header_image' )->title    = __( 'Page Header', 'designexo' );
    $wp_customize->get_section( 'header_image' )->priority = 40;
	
		// Sticky Bar Logo
		$wp_customize->add_setting( 'designexo_sticky_bar_logo', array(
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'designexo_sticky_bar_logo',
			array(
				'label'    => esc_html__( 'Set Sticky Bar Logo', 'designexo' ),
				'description'    => esc_html__( 'You can Upload the Standrad size of logo (210px*39px)', 'designexo' ),
				'section'  => 'designexo_theme_menu_bar',
				'settings' => 'designexo_sticky_bar_logo',
				'priority'        => 15,
			) 
		));			
		$wp_customize->add_setting( 'designexo_typography_base_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Open Sans',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_base_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_base_typography',
			'settings' 			=> 'designexo_typography_base_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	
		
	    $wp_customize->add_setting( 'designexo_typography_base_font_size',
		array(
            'default' => '1rem',
			'sanitize_callback' => 'designexo_sanitize_text',
		));	
		$wp_customize->add_control( 'designexo_typography_base_font_size',
		array(
			'label'   => esc_html__( 'Font Size', 'designexo' ),
			'description'           => esc_html__( 'You can enter font-size in px or rem ', 'designexo' ),
			'section' => 'designexo_base_typography',
			'priority'        => 15,
			'type' => 'text',
		));	

        $wp_customize->add_setting( 'designexo_typography_h1_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Dosis',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_h1_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_headings1_typography',
			'settings' 			=> 'designexo_typography_h1_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );

        $wp_customize->add_setting( 'designexo_typography_h2_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Dosis',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_h2_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_headings2_typography',
			'settings' 			=> 'designexo_typography_h2_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	

        $wp_customize->add_setting( 'designexo_typography_h3_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Dosis',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_h3_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_headings3_typography',
			'settings' 			=> 'designexo_typography_h3_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	
		
		$wp_customize->add_setting( 'designexo_typography_h4_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Dosis',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_h4_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_headings4_typography',
			'settings' 			=> 'designexo_typography_h4_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );		

        $wp_customize->add_setting( 'designexo_typography_h5_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Dosis',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_h5_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_headings5_typography',
			'settings' 			=> 'designexo_typography_h5_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );	

        $wp_customize->add_setting( 'designexo_typography_h6_font_family', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'Dosis',
		) );
		$wp_customize->add_control( new Designexo_Customizer_Typography_Control( $wp_customize,'designexo_typography_h6_font_family', array(
			'label' 			=> esc_html__( 'Font Family', 'designexo' ),
			'section' 			=> 'designexo_headings6_typography',
			'settings' 			=> 'designexo_typography_h6_font_family',
			'priority' 			=> 10,
			'type' 				=> 'select',
			'active_callback' 	=> $active_callback,
		) ) );
		
		$wp_customize->add_setting(
			'designexo_footer_copright_text',
			array(
				'sanitize_callback' =>  'designexo_sanitize_text',
				'default' => __('Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Designexo theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'designexo'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('designexo_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','designexo'),
				'section' => 'designexo_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));
		


}
add_action( 'customize_register', 'designexo_customizer_theme_settings' );

/*
 *  Customizer Notifications
 */ 

require get_template_directory() . '/inc/customizer/customizer-notice/designexo-customizer-notify.php';
$designexo_config_customizer = array(
    'recommended_plugins' => array( 
        'arile-extra' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'designexo' ), '<strong>Arile Extra</strong>' 
            ),
        ),
    ),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'designexo' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'designexo' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'designexo' ),
	'activate_button_label'     => esc_html__( 'Activate', 'designexo' ),
	'designexo_deactivate_button_label'   => esc_html__( 'Deactivate', 'designexo' ),
);
Designexo_Customizer_Notify::init( apply_filters( 'designexo_customizer_notify_array', $designexo_config_customizer ) );