<?php
/**
 * Designexo functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package designexo
 */

if ( ! function_exists( 'designexo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function designexo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on designexo, use a find and replace
		 * to change 'designexo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'designexo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'     => esc_html__( 'Primary', 'designexo' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		// woocommerce support
		
		add_theme_support( 'woocommerce' );
		
		// Woocommerce Gallery Support
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 39,
			'width'       => 224,
			'flex-height' => true,
			'flex-width' => true,
			'header-text' => array( 'site-title', 'site-description' ),
			
		) );
		
		/**
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		/**
		 * Custom background support.
		 */
		add_theme_support( 'custom-background', apply_filters( 'designexo_custom_background_args', array(
			'default-color' => '202020',
			'default-image' => '',
		) ) );
		
		/**
		* Set default content width.
		*/
		if ( ! isset( $content_width ) ) {
			$content_width = 800;
		}
		
	}
endif;
add_action( 'after_setup_theme', 'designexo_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function designexo_widgets_init() {
	$sidebars = apply_filters( 'designexo_sidebars_data', array(
	    'sidebar-main'            => esc_html__( 'Sidebar Widget Area', 'designexo' ),
		'footer-sidebar-one'         => esc_html__( 'Footer Sidebar One', 'designexo' ),
		'footer-sidebar-two'         => esc_html__( 'Footer Sidebar Two', 'designexo' ),
		'footer-sidebar-three'         => esc_html__( 'Footer Sidebar Three', 'designexo' ),
		'footer-sidebar-four'         => esc_html__( 'Footer Sidebar Four', 'designexo' ),
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		$sidebars['woocommerce']  = esc_html__( 'WooCommerce Sidebar', 'designexo' );
	}

	foreach ( $sidebars as $id => $name ) :
	

		register_sidebar( array(
			'id'            => $id,
			'name'          => $name,
			'description'   => $name,
			'before_widget' => '<aside id="%1$s" class="widget %2$s wow animate fadeInUp" data-wow-delay=".3s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

	endforeach;

}
add_action( 'widgets_init', 'designexo_widgets_init');

add_filter('woocommerce_show_page_title', '__return_false');

/**
 * Enqueue scripts and styles.
 */
function designexo_scripts() {
	/**
	 * Styles.
	 */
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css'); 	 
	// Fontawesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );
	// Theme styles.
	wp_enqueue_style( 'designexo-style', get_stylesheet_uri() );
	wp_enqueue_style('designexo-theme-default', get_template_directory_uri() . '/assets/css/theme-default.css');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('bootstrap-smartmenus-css', get_template_directory_uri() . '/assets/css/bootstrap-smartmenus.css');
	wp_enqueue_style('owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

	/**
	 * Scripts.
	 */
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'));	 
	// Theme JavaScript.
	wp_enqueue_script('smartmenus-js', get_template_directory_uri() . '/assets/js/smartmenus/jquery.smartmenus.js');
	wp_enqueue_script( 'designexo-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('designexo-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));
	wp_enqueue_script('bootstrap-smartmenus-js', get_template_directory_uri() . '/assets/js/smartmenus/bootstrap-smartmenus.js');
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
	if(get_theme_mod('designexo_animation_disabled', true) == true):
	wp_enqueue_script('animate-js', get_template_directory_uri() . '/assets/js/animation/animate.js');
	wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.js');
	endif;
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'designexo_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function designexo_admin_enqueue_scripts(){
	wp_enqueue_style('designexo-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
	wp_enqueue_script( 'designexo-admin-script', get_template_directory_uri() . '/assets/js/designexo-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'designexo-admin-script', 'designexo_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'designexo_admin_enqueue_scripts' );

/**
 * Enqueue customizer scripts and styles.
 */
function designexo_customizer_script() {
	 wp_enqueue_style( 'designexo-customize',get_template_directory_uri().'/inc/customizer/assets/css/customize.css', DESIGNEXO_THEME_VERSION, 'screen' );
	wp_enqueue_script( 'designexo-customizer-script', get_template_directory_uri() .'/inc/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
}
add_action( 'customize_controls_enqueue_scripts', 'designexo_customizer_script' );


/**
 * Define constants
 */
// Root path/URI.
define( 'DESIGNEXO_PARENT_DIR', get_template_directory() );
define( 'DESIGNEXO_PARENT_URI', get_template_directory_uri() );

// Include path/URI.
define( 'DESIGNEXO_PARENT_INC_DIR', DESIGNEXO_PARENT_DIR . '/inc' );
define( 'DESIGNEXO_PARENT_INC_URI', DESIGNEXO_PARENT_URI . '/inc' );

// Imgges path.
define( 'DESIGNEXO_PARENT_INC_IMG_URI', DESIGNEXO_PARENT_URI . '/assets/img/' );
// Customizer path.
define( 'DESIGNEXO_PARENT_CUSTOMIZER_DIR', DESIGNEXO_PARENT_INC_DIR . '/customizer' );

// Theme version.
$designexo_theme = wp_get_theme();
define( 'DESIGNEXO_THEME_VERSION', $designexo_theme->get( 'Version' ) );
define ( 'DESIGNEXO_THEME_NAME', $designexo_theme->get( 'Name' ) );

/**
 * Implement the Custom Header feature.
 */
require DESIGNEXO_PARENT_INC_DIR . '/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require DESIGNEXO_PARENT_INC_DIR . '/template-tags.php';

/**
 * Customizer additions.
 */
require DESIGNEXO_PARENT_INC_DIR . '/customizer/designexo-customizer.php';
require DESIGNEXO_PARENT_INC_DIR . '/customizer/designexo-customizer-options.php';

/**
 * Pgge layout setting.
 */

require DESIGNEXO_PARENT_INC_DIR . '/metabox.php';

/**
 * Pgge layout setting.
 */

require DESIGNEXO_PARENT_INC_DIR . '/theme-custom-typography.php';


/**
 * Bootstrap class navwalker.
 */

require DESIGNEXO_PARENT_INC_DIR . '/class-bootstrap-navwalker.php';