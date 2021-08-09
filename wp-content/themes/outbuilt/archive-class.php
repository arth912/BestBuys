<?php get_header(); ?>

<?php do_action('outbuilt_content_container_before'); ?>

<div class="container">

    <?php do_action('outbuilt_content_before'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if (have_posts()) : ?>

                <div class="posts-grid three-columns">

                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('partials/post-types/content', 'post-types'); ?>

                    <?php endwhile; ?>

                </div>

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
