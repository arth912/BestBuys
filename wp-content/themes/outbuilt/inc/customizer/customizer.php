<?php

/**
 * Theme Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function outbuilt_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

    // Enable selective refresh to the Site Title
    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'         => '.site-title a',
            'settings'         => array('blogname'),
            'render_callback'  => function () {
                return get_bloginfo('name', 'display');
            }
        ));
    }

    // Enable selective refresh to the Site Description
    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'         => '.site-description',
            'settings'         => array('blogdescription'),
            'render_callback'  => function () {
                return get_bloginfo('description', 'display');
            }
        ));
    }

    // Remove section
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('background_image');

    // Move custom logo control
    $wp_customize->get_control('custom_logo')->section = 'logo';
}
add_action('customize_register', 'outbuilt_customize_register');

/**
 * This function adds some styles to the WordPress Customizer
 */
function outbuilt_custom_customizer_style() { ?>
    <style>
        .customize-control {
            margin-bottom: 20px;
        }

        .select2-container .select2-selection--single {
            height: 30px;
        }

        .customize-control-kirki-radio-image .image label {
            width: 30%;
            line-height: 1;
            margin-right: 3%;
            margin-bottom: 2%;
        }

        .customize-control-kirki-radio-image input:checked+label img {
            box-shadow: none;
            border: none;
            outline: 2px solid #3498DB;
        }
    </style>
<?php
}
add_action('customize_controls_print_styles', 'outbuilt_custom_customizer_style', 999);

/**
 * Add the configuration.
 * This way all the fields using the 'outbuilt_options' ID
 * will inherit these options
 */
Kirki::add_config('outbuilt_options', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

/**
 * Disable Kirki loader
 */
add_filter('kirki/config', function ($config) {
    $config['disable_loader'] = true;
    return $config;
});

/**
 * Add sections
 */

// General
require get_template_directory() . '/inc/customizer/options/general/general.php';
require get_template_directory() . '/inc/customizer/options/general/container.php';
require get_template_directory() . '/inc/customizer/options/general/back-to-top.php';

// Header
require get_template_directory() . '/inc/customizer/options/header/header.php';
require get_template_directory() . '/inc/customizer/options/header/site-title.php';
require get_template_directory() . '/inc/customizer/options/header/logo.php';
require get_template_directory() . '/inc/customizer/options/header/menu.php';
require get_template_directory() . '/inc/customizer/options/header/mobile-menu.php';
require get_template_directory() . '/inc/customizer/options/header/search.php';
require get_template_directory() . '/inc/customizer/options/header/archive.php';

// Appearance
require get_template_directory() . '/inc/customizer/options/appearance/appearance.php';
require get_template_directory() . '/inc/customizer/options/appearance/typography.php';
require get_template_directory() . '/inc/customizer/options/appearance/layouts.php';
require get_template_directory() . '/inc/customizer/options/appearance/buttons.php';
require get_template_directory() . '/inc/customizer/options/appearance/forms.php';
require get_template_directory() . '/inc/customizer/options/appearance/widgets.php';

// Blog
require get_template_directory() . '/inc/customizer/options/blog/blog.php';
require get_template_directory() . '/inc/customizer/options/blog/post.php';
require get_template_directory() . '/inc/customizer/options/blog/archive.php';
require get_template_directory() . '/inc/customizer/options/blog/pick.php';

// Footer
require get_template_directory() . '/inc/customizer/options/footer/footer.php';
require get_template_directory() . '/inc/customizer/options/footer/copyrights.php';

// Shop
require get_template_directory() . '/inc/customizer/options/shop/catalog.php';

// Ads
require get_template_directory() . '/inc/customizer/options/ads/general.php';

// Settings
require get_template_directory() . '/inc/customizer/options/settings/settings.php';
