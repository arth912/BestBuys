<?php

/**
 * Theme functions file
 *
 * Contains all of the Theme's setup functions, custom functions,
 * custom hooks and Theme settings.
 */

/**
 * Outbuilt only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function outbuilt_setup() {

    // Make the theme available for translation.
    load_theme_textdomain('outbuilt', get_template_directory() . '/languages');

    // Add RSS feed links to <head> for posts and comments.
    add_theme_support('automatic-feed-links');

    /*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails.
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1170, 9999);

    // Custom image size
    add_image_size('outbuilt-post-list', 544, 450, true);
    add_image_size('outbuilt-post-featured', 720, 680, true);

    // Register custom navigation menu.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary Navigation', 'outbuilt'),
            'mobile' => esc_html__('Mobile Navigation', 'outbuilt'),
            'social' => esc_html__('Social Icons', 'outbuilt'),
        )
    );

    /*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Setup the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('outbuilt_custom_background_args', array(
        'default-color' => 'ffffff'
    )));

    // Enable support for Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // This theme uses its own gallery styles.
    add_filter('use_default_gallery_style', '__return_false');

    // Indicate widget sidebars can use selective refresh in the Customizer.
    add_theme_support('customize-selective-refresh-widgets');

    // Adding support for core block visual styles.
    add_theme_support('wp-block-styles');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Enqueue editor styles.
    add_editor_style('style-editor.css');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Disable Kirkir telemetry
    add_filter('kirki_telemetry', '__return_false');
}
add_action('after_setup_theme', 'outbuilt_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function outbuilt_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('outbuilt_content_width', 783);
}
add_action('after_setup_theme', 'outbuilt_content_width', 0);

/**
 * Sets custom content width when current layout is full-width
 */
function outbuilt_fullwidth_content_width() {
    if (in_array(outbuilt_post_layout(), array('full-width'))) {
        $GLOBALS['content_width'] = 1170;
    }
}
add_action('template_redirect', 'outbuilt_fullwidth_content_width');

/**
 * Enqueue scripts and styles.
 */
function outbuilt_enqueue() {

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('outbuilt-style', get_stylesheet_uri(), array(), $theme_version);
    wp_style_add_data('outbuilt-style', 'rtl', 'replace');

    wp_enqueue_style('outbuilt-magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), $theme_version);

    wp_enqueue_script('outbuilt-navigation', get_theme_file_uri('/assets/js/navigation.js'), array(), '1.0.0', true);

    wp_enqueue_script('outbuilt-magnific-popup', get_theme_file_uri('/assets/js/jquery.magnific-popup.js'), array('jquery'), '1.0.0', true);

    wp_enqueue_script('outbuilt-main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0.0', true);

    // js / no-js script.
    wp_add_inline_script('outbuilt-main-js', "document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');");

    // If child theme is active, load the stylesheet.
    if (is_child_theme()) {
        wp_enqueue_style('outbuilt-child-style', get_stylesheet_uri(), array(), $theme_version);
    }

    // Load comment-reply script.
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'outbuilt_enqueue');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function outbuilt_skip_link_focus_fix() {
?>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>
<?php
}
add_action('wp_print_footer_scripts', 'outbuilt_skip_link_focus_fix');

/**
 * Registers widget areas and custom widgets.
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function outbuilt_sidebars_init() {

    register_sidebar(
        array(
            'name'          => esc_html__('Primary', 'outbuilt'),
            'id'            => 'primary',
            'description'   => esc_html__('Main sidebar that appears on the right.', 'outbuilt'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title module-title">',
            'after_title'   => '</h3>',
        )
    );

    if (outbuilt_is_woocommerce_activated()) {
        register_sidebar(
            array(
                'name'          => esc_html__('WooCommerce Sidebar', 'outbuilt'),
                'id'            => 'woo_sidebar',
                'description'   => esc_html__('Widgets in this area are used in your WooCommerce sidebar for shop pages and product posts.', 'outbuilt'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }

    // Get the footer widget column from Customizer.
    $widget_columns = get_theme_mod('footer_widgets_columns', '4');
    for ($i = 1; $i <= $widget_columns; $i++) {
        register_sidebar(
            array(
                'name'          => sprintf(esc_html__('Footer %s', 'outbuilt'), $i),
                'id'            => 'footer-' . $i,
                'description'   => esc_html__('Sidebar that appears on the bottom of your site.', 'outbuilt'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title module-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
add_action('widgets_init', 'outbuilt_sidebars_init');

if (!function_exists('wp_body_open')) :
    /**
     * Shim for wp_body_open, ensuring backwards compatibility with versions of WordPress older than 5.2.
     */
    function wp_body_open() {
        do_action('wp_body_open');
    }
endif;

if (!function_exists('outbuilt_is_outbuilt_core_activated')) :
    /**
     * Check if Outbuilt Core is active
     */
    function outbuilt_is_outbuilt_core_activated() {
        return class_exists('Outbuilt_Core') ? true : false;
    }
endif;

if (!function_exists('outbuilt_is_woocommerce_activated')) :
    /**
     * Check if WooCommerce is active
     */
    function outbuilt_is_woocommerce_activated() {
        return class_exists('WooCommerce') ? true : false;
    }
endif;


if (!function_exists('outbuilt_is_yww_activated')) {
    /**
     * Check if YITH WooCommerce Wishlist is activated.
     */
    function outbuilt_is_yww_activated() {
        return class_exists('YITH_WCWL') ? true : false;
    }
}

if (!function_exists('outbuilt_is_quick_view_activated')) {
    /**
     * Check if Woo Smart Quick View is activated.
     */
    function outbuilt_is_quick_view_activated() {
        return class_exists('WPcleverWoosq') ? true : false;
    }
}

if (!function_exists('outbuilt_is_smart_compare_activated')) {
    /**
     * Check if Woo Smart Smart Compare is activated.
     */
    function outbuilt_is_smart_compare_activated() {
        return class_exists('WPcleverWooscp') ? true : false;
    }
}

// Template parts.
require get_template_directory() . '/inc/template-parts.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Template functions.
require get_template_directory() . '/inc/template-functions.php';

// Template features.
require get_template_directory() . '/inc/template-features.php';

// Meta boxes functions
require get_template_directory() . '/inc/metaboxes.php';

// Recommended plugins.
require get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/plugins.php';

// Handle demo importer
require get_template_directory() . '/inc/demo/demo-importer.php';

// Handle customizer settings.
if (outbuilt_is_outbuilt_core_activated()) {
    require get_template_directory() . '/inc/customizer/helpers.php';
    require get_template_directory() . '/inc/customizer/customizer.php';
}

// WooCommerce integration.
if (outbuilt_is_woocommerce_activated()) {
    require get_template_directory() . '/inc/woocommerce.php';
}

// Auto update the theme.
require get_template_directory() . '/inc/updater.php';

// MailOptin integration
require get_template_directory() . '/inc/classes/class-mailoptin.php';
