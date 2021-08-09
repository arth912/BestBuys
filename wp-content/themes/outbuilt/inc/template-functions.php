<?php

/**
 * Helper functions
 */

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function outbuilt_pingback_header() {
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="', bloginfo('pingback_url'), '">';
    }
}
add_action('wp_head', 'outbuilt_pingback_header');

/**
 * Adds classes to the body tag
 */
function outbuilt_body_classes($classes) {

    // Vars
    $post_layout       = outbuilt_post_layout();
    $post_style        = outbuilt_get_post_style(get_the_ID());
    $global_post_style = get_theme_mod('post_style', 'default');
    $container         = get_theme_mod('container_style', 'full-width');
    $bg_archive        = get_theme_mod('archive_header_img');

    // RTL
    if (is_rtl()) {
        $classes[] = 'rtl';
    }

    // Main class
    $classes[] = 'outbuilt-theme';

    // Container style
    $classes[] = $container . '-container';

    // Sidebar enabled
    if (
        'left-sidebar' == $post_layout
        || 'right-sidebar' == $post_layout
        && 'full-width' != $container
    ) {
        $classes[] = 'has-sidebar';
    }

    // Post layout
    if ($post_layout) {
        $classes[] = $post_layout;
    }

    // Post style
    if (is_single()) {
        if ($post_style != 'default') {
            $classes[] = 'style-' . $post_style;
        } else {
            $classes[] = 'style-' . $global_post_style;
        }
    }

    // Has featured image.
    if (is_singular() && has_post_thumbnail()) {
        $classes[] = 'has-featured-image';
    }

    // BG archive
    if ($bg_archive && is_archive()) {
        $classes[] = 'has-bg-header-image';
    }

    // Return classes
    return $classes;
}
add_filter('body_class', 'outbuilt_body_classes');

/**
 * Returns correct post layout.
 */
function outbuilt_post_layout() {

    // Define variables
    $class  = 'right-sidebar';
    $meta   = outbuilt_get_post_layout(get_the_ID());

    // Check meta first to override and return (prevents filters from overriding meta)
    if (is_singular() && $meta != 'default') {
        $class = $meta;
        return $class;
    }

    // Singular Page
    if (is_page()) {

        $class = get_theme_mod('page_layout', 'right-sidebar');
    }

    // Attachment
    elseif (is_attachment() && wp_attachment_is_image()) {
        $class = 'full-width';
    }

    // Home
    elseif (is_home()) {
        $class = get_theme_mod('blog_layout', 'right-sidebar');
    }

    // Archives
    elseif (
        is_category()
        || is_tag()
        || is_date()
        || is_author()
    ) {
        $class = get_theme_mod('archive_layout', 'right-sidebar');
    }

    // Singular Post
    elseif (is_singular('post')) {
        $class = get_theme_mod('post_layout', 'right-sidebar');
    }

    // Library and Elementor template
    elseif (is_singular('elementor_library')) {
        $class = 'full-width';
    }

    // Custom post types
    elseif (
        is_post_type_archive('tribe_events') ||
        is_post_type_archive('class')
    ) {
        $class = 'full-width';
    }

    // 404 page
    elseif (is_404()) {
        $class = 'full-width-narrow';
    }

    // All else
    else {
        $class = 'right-sidebar';
    }

    // Class should never be empty
    if (empty($class)) {
        $class = 'right-sidebar';
    }

    // Apply filters and return
    return apply_filters('outbuilt_post_layout_class', $class);
}

/**
 * Returns the correct sidebar region.
 */
function outbuilt_get_sidebar($sidebar = 'primary') {

    // Return the correct sidebar name & add useful hook
    $sidebar = apply_filters('outbuilt_get_sidebar', $sidebar);

    // Check meta option after filter so it always overrides
    if ($meta = get_post_meta(get_the_ID(), 'sidebar', true)) {
        $sidebar = $meta;
    }

    // WooCommerce
    if (outbuilt_is_woocommerce_activated()) {
        if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
            $sidebar = 'woo_sidebar';
        }
    }

    // Never show empty sidebar
    if (!is_active_sidebar($sidebar)) {
        $sidebar = 'primary';
    }

    return $sidebar;
}

/**
 * Page title.
 */
function outbuilt_page_title() {

    // Check if is page
    if (!is_page())
        return;

    // Variable
    $page_title = outbuilt_get_hide_page_title(get_the_ID());

    // Hide page title.
    if ($page_title == true) {
        return;
    }

?>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header>
<?php
}
add_action('outbuilt_content_before', 'outbuilt_page_title', 1);
/**
 * Archive header informations.
 */
function outbuilt_archive_header() { ?>

    <?php if (is_archive() && !is_search()) : ?>
        <div class="archive-header">
            <div class="archive-content">
                <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
                <?php the_archive_description('<div class="archive-desc">', '</div>'); ?>
            </div>
        </div><!-- .archive-header -->
    <?php endif; ?>

    <?php if (is_search()) : ?>
        <div class="archive-header">
            <div class="archive-content">
                <span class="browse"><?php esc_html_e('Search Results for', 'outbuilt'); ?></span>
                <h1 class="archive-title"><?php echo get_search_query(); ?></h1>
            </div>
        </div><!-- .archive-header -->
    <?php endif; ?>

<?php }
add_action('outbuilt_header', 'outbuilt_archive_header', 10);

/**
 * Adds custom classes to the array of post classes.
 */
function outbuilt_post_classes($classes) {

    // Replace hentry class with entry.
    $classes[] = 'entry';

    return $classes;
}
add_filter('post_class', 'outbuilt_post_classes');

/**
 * Remove 'hentry' from post_class()
 */
function outbuilt_remove_hentry($class) {
    $class = array_diff($class, array('hentry'));
    return $class;
}
add_filter('post_class', 'outbuilt_remove_hentry');

/**
 * Change the excerpt more string.
 */
function outbuilt_excerpt_more($more) {
    return '&hellip;';
}
add_filter('excerpt_more', 'outbuilt_excerpt_more');

/**
 * Filter the excerpt length.
 */
function outbuilt_custom_excerpt_length($length) {

    // Sets default
    $length = 20;

    // Get the user settings
    $setting = get_theme_mod('excerpt', 20);
    if (20 != $setting) {
        $length = $setting;
    }

    return $length;
}
add_filter('excerpt_length', 'outbuilt_custom_excerpt_length', 999);

/**
 * Extend archive title
 */
function outbuilt_the_archive_title($title) {
    if (is_post_type_archive('product')) {
        $default = get_theme_mod('shop_title', esc_attr__('All Products', 'outbuilt'));
        $title = wp_kses_post($default);
    } elseif (is_post_type_archive('tribe_events')) {
        $title = esc_attr__('All Events', 'outbuilt');
    } elseif (is_post_type_archive('class')) {
        $title = esc_attr__('All Classes', 'outbuilt');
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_category()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'outbuilt_the_archive_title');

/**
 * Extend archive description
 */
function outbuilt_the_archive_desc($desc) {
    if (is_post_type_archive('product')) {
        $default = get_theme_mod('shop_desc', esc_attr__('You can add your shop description here.', 'outbuilt'));
        $desc = wp_kses_post($default);
    }
    return $desc;
}
add_filter('get_the_archive_description', 'outbuilt_the_archive_desc');

/**
 * Customize tag cloud widget
 */
function outbuilt_customize_tag_cloud($args) {
    $args['largest']  = 13;
    $args['smallest'] = 13;
    $args['unit']     = 'px';
    $args['number']   = 20;
    return $args;
}
add_filter('widget_tag_cloud_args', 'outbuilt_customize_tag_cloud');

/**
 * Add a dropdown icon to top-level menu items.
 */
function instock_add_dropdown_icons($output, $item, $depth, $args) {

    // Only add class to 'top level' items on the 'primary' menu.
    if ('mobile' !== $args->theme_location) {
        return $output;
    }

    if (in_array('menu-item-has-children', $item->classes, true)) {

        // Add SVG icon to parent items.
        $icon = '<i class="icon-arrow-down"></i>';

        $output .= sprintf(
            '<button class="submenu-expand" tabindex="-1">%s</button>',
            $icon
        );
    }

    return $output;
}
add_filter('walker_nav_menu_start_el', 'instock_add_dropdown_icons', 10, 4);

/**
 * Scriptless social sharing location.
 */
function instock_change_sss_locations($locations) {
    $locations['before'] = array(
        'hook'     => 'outbuilt_post_title_after',
        'filter'    => false,
        'priority' => 8,
    );
    $locations['after'] = array(
        'hook'     => 'outbuilt_post_after',
        'filter'    => false,
        'priority' => 8,
    );
    return $locations;
}
add_filter('scriptlesssocialsharing_locations', 'instock_change_sss_locations');

/**
 * Scriptless social sharing remove heading.
 */
function instock_remove_sss_heading($heading) {
    $heading = false;
    return $heading;
}
add_filter('scriptlesssocialsharing_heading', 'instock_remove_sss_heading');

/**
 * Header ad
 */
function outbuilt_header_ad() {

    // Exclude homepage.
    if (is_home() || is_front_page()) {
        return;
    }

    // Get the ad code
    $code = get_theme_mod('header_ad');

    if ($code) {
        echo '<div class="outbuilt-header-banner outbuilt-banner">' . wp_kses_post($code) . '</div>';
    }
}
add_action('outbuilt_header', 'outbuilt_header_ad', 15);

/**
 * Footer ad
 */
function outbuilt_footer_ad() {

    // Get the ad code
    $code = get_theme_mod('footer_ad');

    if ($code) {
        echo '<div class="outbuilt-footer-banner outbuilt-banner">' . wp_kses_post($code) . '</div>';
    }
}
add_action('outbuilt_footer_before', 'outbuilt_footer_ad', 1);
