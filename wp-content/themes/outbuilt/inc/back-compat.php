<?php

/**
 * Outbuilt back compat functionality
 *
 * Prevents Outbuilt from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 */

/**
 * Prevent switching to Outbuilt on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Outbuilt 1.0.0
 */
function outbuilt_switch_theme() {
    switch_theme(WP_DEFAULT_THEME);
    unset($_GET['activated']);
    add_action('admin_notices', 'outbuilt_upgrade_notice');
}
add_action('after_switch_theme', 'outbuilt_switch_theme');

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Outbuilt on WordPress versions prior to 4.7.
 *
 * @since Outbuilt 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function outbuilt_upgrade_notice() {
    $message = sprintf(__('Outbuilt requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'outbuilt'), $GLOBALS['wp_version']);
    printf('<div class="error"><p>%s</p></div>', $message);
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Outbuilt 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function outbuilt_customize() {
    wp_die(
        sprintf(
            __('Outbuilt requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'outbuilt'),
            $GLOBALS['wp_version']
        ),
        '',
        array(
            'back_link' => true,
        )
    );
}
add_action('load-customize.php', 'outbuilt_customize');

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Outbuilt 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function outbuilt_preview() {
    if (isset($_GET['preview'])) {
        wp_die(sprintf(__('Outbuilt requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'outbuilt'), $GLOBALS['wp_version']));
    }
}
add_action('template_redirect', 'outbuilt_preview');
