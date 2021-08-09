<?php

/**
 * Custom template features
 * - Tags
 * - Hooks
 */

/**
 * Post feature: Default style
 */
function outbuilt_post_style_default() {

    // Variable
    $post_style        = outbuilt_get_post_style(get_the_ID());
    $global_post_style = get_theme_mod('post_style', 'default');
    $style             = '';

    // Check the meta box setting first.
    if ($post_style != 'default') {
        $style = $post_style;
    } else {
        $style = $global_post_style;
    }

    // Return early if the value is not 'default'.
    if ('default' == $style || 'thumbnail-on-top' == $style || 'full-width-thumbnail-on-top' == $style) {
?>

        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="entry-meta">
                <?php outbuilt_post_meta(); ?>
            </div>
            <?php do_action('outbuilt_post_title_after'); ?>
        </header>

    <?php }
}
add_action('outbuilt_post_before', 'outbuilt_post_style_default', 2);

/**
 * Post feature: thumbnail
 */
function outbuilt_post_style_thumbnail() {

    // Variable
    $post_style        = outbuilt_get_post_style(get_the_ID());
    $global_post_style = get_theme_mod('post_style', 'default');
    $img               = get_theme_mod('post_featured_image', true);
    $style             = '';

    // Check the meta box setting first.
    if ($post_style != 'default') {
        $style = $post_style;
    } else {
        $style = $global_post_style;
    }

    // Return early.
    if ('default' == $style || 'full-width-title' == $style) { ?>

        <?php if (true == $img && has_post_thumbnail()) : ?>
            <?php outbuilt_single_post_thumbnail(); ?>
        <?php endif; ?>

    <?php }
}
add_action('outbuilt_post_before', 'outbuilt_post_style_thumbnail', 1);

/**
 * Post feature
 */
function outbuilt_post_style_all() {

    // Variable
    $post_style        = outbuilt_get_post_style(get_the_ID());
    $global_post_style = get_theme_mod('post_style', 'default');
    $img               = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
    $style             = '';

    // Check the meta box setting first.
    if ($post_style != 'default') {
        $style = $post_style;
    } else {
        $style = $global_post_style;
    }

    // Return early if not single post
    if (!is_single()) {
        return;
    }

    // Return early if the value is 'default'.
    if ('default' == $style) {
        return;
    }
    ?>


    <?php
    // Full width title
    if ('full-width-title' == $style) { ?>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="entry-meta">
                <?php outbuilt_post_meta(); ?>
            </div>
            <?php do_action('outbuilt_post_title_after'); ?>
        </header>


    <?php
        // Side by side
    } elseif ('side-by-side' == $style || 'full-width-side-by-side' == $style) { ?>
        <div class="post-header side-by-side">
            <div class="side-by-side__wrapper">

                <div class="side-by-side__content">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <div class="entry-meta">
                        <?php outbuilt_post_meta(); ?>
                    </div>
                </div>

                <div class="side-by-side__img">
                    <?php outbuilt_single_post_thumbnail('outbuilt-post-featured'); ?>
                </div>

            </div>
        </div>

    <?php
        // Thumbnail overlay
    } elseif ('thumbnail-overlay' == $style || 'full-width-thumbnail-overlay' == $style) { ?>
        <div class="post-header thumbnail-overlay" style="background-image: url('<?php echo esc_url($img); ?>');">
            <div class="thumbnail-overlay__wrapper">

                <div class="thumbnail-overlay__content">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <div class="entry-meta">
                        <?php outbuilt_post_meta(); ?>
                    </div>
                </div>

            </div>
        </div>

    <?php
        // Thumbnail on top
    } elseif ('thumbnail-on-top' == $style || 'full-width-thumbnail-on-top' == $style) { ?>
        <div class="post-header thumbnail-on-top" style="background-image: url('<?php echo esc_url($img); ?>');">
            <div class="thumbnail-on-top__wrapper">

            </div>
        </div>

    <?php } ?>

    <?php
}
add_action('outbuilt_content_before', 'outbuilt_post_style_all', 1);

/**
 * Featured posts
 */
function outbuilt_featured_posts() {

    // Bail if not on home page.
    if (!is_home())
        return;

    // Check for transient. If none, then execute WP_Query
    if (false === ($featured = get_transient('outbuilt_featured_posts'))) {

        // Posts query arguments.
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'tag'            => 'featured',
        );

        // The post query
        $featured = new WP_Query($args);

        // Put the results in a transient. Expire after 12 hours.
        set_transient('outbuilt_featured_posts', $featured, 12 * HOUR_IN_SECONDS);
    }

    // Check if the post(s) exist.
    if ($featured) : ?>

        <div class="featured-posts">
            <div class="featured-posts-container">

                <?php while ($featured->have_posts()) : $featured->the_post(); ?>

                    <div class="featured-posts-item">

                        <?php outbuilt_post_thumbnail('outbuilt-post-featured', true); ?>

                        <div class="featured-posts-content">
                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                            <div class="entry-meta">
                                <?php outbuilt_post_meta(); ?>
                            </div>
                        </div>

                    </div>

                <?php endwhile; ?>

            </div>
        </div>

    <?php endif;

    // Restore original Post Data.
    wp_reset_postdata();
}
add_action('outbuilt_header', 'outbuilt_featured_posts', 10);

if (!function_exists('outbuilt_pre_get_posts')) :
    /**
     * Exclude featured posts from the home page blog query.
     */
    function outbuilt_pre_get_posts($query) {

        // Bail if not home or not main query.
        if (!$query->is_home() || !$query->is_main_query()) {
            return;
        }

        $page_on_front = get_option('page_on_front');

        // Bail if the blog page is not the front page.
        if (!empty($page_on_front)) {
            return;
        }

        // Get the tag name.
        $exclude = get_term_by('name', 'featured', 'post_tag');

        // Exclude the main query.
        if (!empty($exclude)) {
            $query->set('tag__not_in', $exclude->term_id);
        }
    }
    add_action('pre_get_posts', 'outbuilt_pre_get_posts');
endif;

/**
 * Editor's pick posts
 */
function outbuilt_editors_pick_posts() {

    // Get the title
    $title = get_theme_mod('pick_title', esc_attr__('Editor\'s Pick', 'outbuilt'));

    // Get the category ID
    $cat_id = get_theme_mod('pick_category');
    if (!$cat_id)
        return;

    // // Check for transient. If none, then execute WP_Query
    if (false === ($pick = get_transient('outbuilt_editors_pick_posts'))) {

        // Posts query arguments.
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'cat'            => $cat_id,
        );

        // The post query
        $pick = new WP_Query($args);

        // Put the results in a transient. Expire after 12 hours.
        set_transient('outbuilt_editors_pick_posts', $pick, 12 * HOUR_IN_SECONDS);
    }

    // Check if the post(s) exist.
    if ($pick && is_home() || is_singular('post')) : ?>

        <div class="pick-posts">

            <h3 class="pick-posts-title"><?php echo esc_html($title); ?></h3>

            <div class="posts-grid three-columns">

                <?php while ($pick->have_posts()) : $pick->the_post(); ?>

                    <?php get_template_part('partials/content/content', 'grid'); ?>

                <?php endwhile; ?>

            </div>

        </div>

<?php endif;

    // Restore original Post Data.
    wp_reset_postdata();
}
add_action('outbuilt_content_after', 'outbuilt_editors_pick_posts', 10);

/**
 * Flush out the transients.
 */
function outbuilt_transient_flusher() {
    delete_transient('outbuilt_featured_posts');
    delete_transient('outbuilt_editors_pick_posts');
}
add_action('save_post', 'outbuilt_transient_flusher');
add_action('customize_save', 'outbuilt_transient_flusher');
add_action('edit_term', 'outbuilt_transient_flusher');

/**
 * Background image for Archive header
 */
function outbuilt_bg_archive() {

    // Only for archive page.
    if (!is_archive())
        return;

    // Get the customizer data
    $bg = get_theme_mod('archive_header_img');

    // Display the header image
    if (!empty($bg)) {
        $bg = wp_get_attachment_url($bg);
        $css = '.archive-header { background-image: url("' . esc_url($bg) . '") }';

        wp_add_inline_style('outbuilt-style', $css);
    }
}
add_action('wp_enqueue_scripts', 'outbuilt_bg_archive');
