<?php
/**
 * Gowp Customizer Class 
 *
 * @package designexo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Designexo_Customizer' ) ) :

	// Designexo Customizer class
	
	class Designexo_Customizer {
		
		// Constructor customizer
		public function __construct() {

			add_action( 'customize_register', array( $this, 'designexo_customizer_panel_control' ) );
			add_action( 'customize_register', array( $this, 'designexo_customizer_register' ) );
			add_action( 'customize_register', array( $this, 'designexo_customizer_selective_refresh' ) );
			add_action( 'customize_preview_init', array( $this, 'designexo_customizer_preview_js' ) );
			add_action( 'after_setup_theme', array( $this, 'designexo_customizer_settings' ) );

		}

		// Register custom controls
		public function designexo_customizer_panel_control( $wp_customize ) {

			// Controls path.
			$control_dir = DESIGNEXO_PARENT_INC_DIR . '/customizer/controls';
			$setting_dir = DESIGNEXO_PARENT_INC_DIR . '/customizer/settings';

			// Load customizer options extending classes.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/custom-customizer/designexo-customizer-panel.php';
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/custom-customizer/designexo-customizer-section.php';

			// Register extended classes.
			$wp_customize->register_panel_type( 'Designexo_Customize_Panel' );
			$wp_customize->register_section_type( 'Designexo_Customize_Section' );

			require_once $control_dir . '/code/designexo-customize-base-control.php';
			require_once $control_dir . '/code/designexo-customize-color-control.php';
			require_once $control_dir . '/code/designexo-customize-heading-control.php';
			require_once $control_dir . '/code/designexo-customize-radio-image-control.php';
			require_once $control_dir . '/code/designexo-customize-radio-buttonset-control.php';
			require_once $control_dir . '/code/designexo-customize-slider-control.php';
			require_once $control_dir . '/code/designexo-customize-sortable-control.php';
			require_once $control_dir . '/code/designexo-customize-toggle-control.php';
            require_once $control_dir . '/code/designexo-customize-upgrade-control.php';
			
			// Register JS-rendered control types.
			$wp_customize->register_control_type( 'Designexo_Customize_Color_Control' );
			$wp_customize->register_control_type( 'Designexo_Customize_Heading_Control' );
			$wp_customize->register_control_type( 'Designexo_Customize_Radio_Image_Control' );
			$wp_customize->register_control_type( 'Designexo_Customize_Radio_Buttonset_Control' );
			$wp_customize->register_control_type( 'Designexo_Customize_Slider_Control' );
			$wp_customize->register_control_type( 'Designexo_Customize_Sortable_Control' );
			$wp_customize->register_control_type( 'Designexo_Customize_Toggle_Control' );
            $wp_customize->register_control_type( 'Designexo_Customize_Upgrade_Control' );
		}

		// Customizer selective refresh.
		public function designexo_customizer_selective_refresh() {

			require_once DESIGNEXO_PARENT_INC_DIR . '/customizer/designexo-customizer-sanitize.php';
			require_once DESIGNEXO_PARENT_INC_DIR . '/customizer/designexo-customizer-partials.php';

		}

		// Add postMessage support for site title and description for the Theme Customizer.

		public function designexo_customizer_register( $wp_customize ) {

			// Customizer selective
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/designexo-customizer-selective.php';

			// Register panels and sections.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/designexo-panels-and-sections.php';

		}

        // Theme Customizer preview reload changes asynchronously.
		public function designexo_customizer_preview_js() {

			wp_enqueue_script( 'designexo-customizer', DESIGNEXO_PARENT_INC_URI . '/customizer/assets/js/customizer.js', array( 'customize-preview' ), DESIGNEXO_THEME_VERSION, true );

		}

		// Include customizer customizer settings.
	
		public function designexo_customizer_settings() {
			
			// Base class.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/designexo-customize-base-customizer-settings.php';
			// General.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-general-customizer-settings.php';
			// Menu.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-menu-bar-customizer-settings.php';
			// Page Header.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-page-header-customizer-settings.php';
			// Blog.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-blog-general-customizer-settings.php';
			// Footer.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-footer-copyright-customizer-settings.php';
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-footer-widget-customizer-settings.php';
			// Typography.
			require DESIGNEXO_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/designexo-typography-customizer-settings.php';
			

		}
	

	}
endif;

new Designexo_Customizer();