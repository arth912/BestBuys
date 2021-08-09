<?php
/**
 * Register customizer panels and sections.
 *
 * @package designexo
 */

/* Theme Settings. */
 
$wp_customize->add_panel( new Designexo_Customize_Panel( $wp_customize, 'designexo_theme_settings', array(
	'priority'   => 28,
	'title'      => esc_html__( 'Theme Options', 'designexo' ),
	'capabitity' => 'edit_theme_options',
) ) );

// Section: General.
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_theme_general', array(
		'title'    => esc_html__( 'General', 'designexo' ),
		'panel'    => 'designexo_theme_settings',
		'priority' => 9,
	) ) );

// Section Header.
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_theme_header', array(
		'title'    => esc_html__( 'Header', 'designexo' ),
		'panel'    => 'designexo_theme_settings',
		'priority' => 10,
	) ) );
	

// Section Menu.
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_theme_menu_bar', array(
		'title'    => esc_html__( 'Menu', 'designexo' ),
		'panel'    => 'designexo_theme_settings',
		'priority' => 20,
	) ) );


// Section Blog.

	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_theme_blog_settings', array(
		'title'    => esc_html__( 'Blog', 'designexo' ),
		'panel'    => 'designexo_theme_settings',
		'priority' => 30,
	) ) );
	
		$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_blog_general', array(
			'title'    => esc_html__( 'General', 'designexo' ),
			'panel'    => 'designexo_theme_settings',
			'section'  => 'designexo_theme_blog_settings',
			'priority' => 10,
		) ) );


// Section Footer.

	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_theme_footer', array(
		'title'    => esc_html__( 'Footer', 'designexo' ),
		'panel'    => 'designexo_theme_settings',
		'priority' => 50,
	) ) );
	
	    $wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_footer_widgets', array(
			'title'    => esc_html__( 'Footer Widgets', 'designexo' ),
			'panel'    => 'designexo_theme_settings',
			'section'  => 'designexo_theme_footer',
			'priority' => 10,
		) ) );
	
		$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_footer_copyright', array(
			'title'    => esc_html__( 'Footer Copyright', 'designexo' ),
			'panel'    => 'designexo_theme_settings',
			'section'  => 'designexo_theme_footer',
			'priority' => 20,
		) ) );

/**
 * Panel: Typography.
 */
$wp_customize->add_panel( new Designexo_Customize_Panel( $wp_customize, 'designexo_theme_typography', array(
	'priority'   => 32,
	'title'      => esc_html__( 'Typography', 'designexo' ),
	'capabitity' => 'edit_theme_options',
) ) );

    // Section Enable/Disable Typography.
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_enable_disable_typography', array(
		'title'    => esc_html__( 'Enable Typography', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 5,
	) ) );

	// Section Base typography Typography.
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_base_typography', array(
		'title'    => esc_html__( 'Base Typography', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 10,
	) ) );
	
	// Section Headings ( h1 - h6 ) Typography.
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_headings1_typography', array(
		'title'    => esc_html__( 'Headings H1', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 70,
	) ) );
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_headings2_typography', array(
		'title'    => esc_html__( 'Headings H2', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 80,
	) ) );
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_headings3_typography', array(
		'title'    => esc_html__( 'Headings H3', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 90,
	) ) );
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_headings4_typography', array(
		'title'    => esc_html__( 'Headings H4', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 100,
	) ) );
	
	$wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_headings5_typography', array(
		'title'    => esc_html__( 'Headings H5', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 110,
	) ) );

    $wp_customize->add_section( new Designexo_Customize_Section( $wp_customize, 'designexo_headings6_typography', array(
		'title'    => esc_html__( 'Headings H6', 'designexo' ),
		'panel'    => 'designexo_theme_typography',
		'priority' => 120,
	) ) );