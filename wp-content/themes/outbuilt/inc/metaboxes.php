<?php

/**
 * Metaboxes functions
 */

/**
 * Get the post layout based on the given post ID.
 */
function outbuilt_get_post_layout($post_id) {

    // Get the post layout.
    $layout = get_post_meta($post_id, '_outbuilt_page_layout', true);

    // Return the layout if one is found.  Otherwise, return 'default'.
    return (!empty($layout) ? $layout : 'default');
}

/**
 * Get the post style based on the given post ID.
 */
function outbuilt_get_post_style($post_id) {

    // Get the post layout.
    $style = get_post_meta($post_id, '_outbuilt_post_style', true);

    // Return the style if one is found.  Otherwise, return 'default'.
    return (!empty($style) ? $style : 'default');
}

/**
 * Get the hide page title.
 */
function outbuilt_get_hide_page_title($post_id) {

    // Get the post layout.
    $hide_title = get_post_meta($post_id, '_outbuilt_hide_title', true);

    // Return the value.
    return ((isset($hide_title) && true == $hide_title) ? true : false);
}
