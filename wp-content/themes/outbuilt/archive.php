<?php
// Get the customizer data.
$style   = get_theme_mod('archive_style', 'grid');
$layout  = get_theme_mod('archive_layout', 'right-sidebar');
$columns = get_theme_mod('archive_grid_columns', 'two-columns');
$class   = 'posts';

// Do not use 3 columns if layout is not full-width
if ($layout != 'full-width') {
    $columns = 'two-columns';
}

// Custom class
if ($style == 'grid') {
    $class = 'posts-grid ' . $columns;
} elseif ($style == 'list') {
    $class = 'posts-list';
} elseif ($style == 'alternate') {
    $class = 'posts-alternate';
}
?>

<?php get_header(); ?>

<?php do_action('outbuilt_content_container_before'); ?>

<div class="container">

    <?php do_action('outbuilt_content_before'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if (have_posts()) : ?>

                <div class="<?php echo esc_attr($class); ?>">

                    <?php while (have_posts()) : the_post(); ?>

                        <?php if ($style == 'default') { ?>
                            <?php get_template_part('partials/content/content'); ?>
                        <?php } elseif ($style == 'grid') { ?>
                            <?php get_template_part('partials/content/content', 'grid'); ?>
                        <?php } elseif ($style == 'list') { ?>
                            <?php get_template_part('partials/content/content', 'list'); ?>
                        <?php } elseif ($style == 'alternate') { ?>
                            <?php if ($wp_query->current_post == 0 && !is_paged()) { ?>
                                <?php get_template_part('partials/content/content'); ?>
                            <?php } else { ?>
                                <?php get_template_part('partials/content/content', 'list'); ?>
                            <?php } ?>
                        <?php } ?>

                    <?php endwhile; ?>

                    <?php get_template_part('pagination'); // Loads the pagination.php template
                    ?>

                <?php else : ?>

                    <?php get_template_part('partials/content/content', 'none'); ?>

                <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); // Loads the sidebar.php template.
    ?>

    <?php do_action('outbuilt_content_after'); ?>

</div><!-- .container -->

<?php do_action('outbuilt_content_container_after'); ?>

<?php get_footer(); ?>
