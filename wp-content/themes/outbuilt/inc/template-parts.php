<?php

/**
 * Template area
 */

if (!function_exists('outbuilt_header')) {
    /**
     * Header
     */
    function outbuilt_header() {
        get_template_part('partials/header/header');
    }

    add_action('outbuilt_header', 'outbuilt_header');
}

if (!function_exists('outbuilt_footer')) {
    /**
     * Footer template
     */
    function outbuilt_footer() {
        get_template_part('sidebar', 'footer');
    }

    add_action('outbuilt_footer', 'outbuilt_footer');
}
