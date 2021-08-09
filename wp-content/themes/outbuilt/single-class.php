<?php get_header(); ?>

<?php do_action('outbuilt_content_container_before'); ?>

<div class="container">

    <?php do_action('outbuilt_content_before'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('partials/post-types/content', 'single-class'); ?>

            <?php endwhile; // end of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); // Loads the sidebar.php template.
    ?>

    <?php do_action('outbuilt_content_after'); ?>

</div><!-- .container -->

<?php do_action('outbuilt_content_container_after'); ?>

<?php get_footer(); ?>
