<?php

/**
 * TGM Plugin Lists
 */

/**
 * Register required and recommended plugins.
 */
function outbuilt_register_plugins() {

    $plugins = array(

        array(
            'name'     => 'Advanced Custom Fields',
            'slug'     => 'advanced-custom-fields',
            'required' => true,
        ),

        array(
            'name'     => 'Outbuilt Core',
            'slug'     => 'outbuilt-core',
            'source'   => get_template_directory() . '/inc/plugins/outbuilt-core.zip',
            'required' => true,
        ),

        array(
            'name'     => 'Elementor Website Builder',
            'slug'     => 'elementor',
            'required' => false,
        ),

        array(
            'name'     => 'Prime Slider – Addons For Elementor',
            'slug'     => 'bdthemes-prime-slider-lite',
            'required' => false,
        ),

        array(
            'name'     => 'The Events Calendar',
            'slug'     => 'the-events-calendar',
            'required' => false,
        ),

        array(
            'name'     => 'Contact Form 7',
            'slug'     => 'contact-form-7',
            'required' => false,
        ),

        array(
            'name'     => 'Scriptless Social Sharing',
            'slug'     => 'scriptless-social-sharing',
            'required' => false,
        ),

        array(
            'name'     => 'One Click Demo Import',
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ),

        array(
            'name'     => 'MailOptin',
            'slug'     => 'mailoptin',
            'required' => false,
        ),

    );

    $config = array(
        'id'           => 'tgmpa',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'outbuilt_register_plugins');
