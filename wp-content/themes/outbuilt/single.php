<?php get_header(); ?>

<?php do_action('outbuilt_content_container_before'); ?>

<div class="container">

    <?php do_action('outbuilt_content_before'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('partials/content/content', 'single'); ?>

                <?php outbuilt_next_prev_post(); // Display the next and previous post.
                ?>

                <?php outbuilt_post_author_box(); // Display the author box.
                ?>

                <?php outbuilt_related_posts(); // Display the related posts.
                ?>

                <?php
                // Get data set in customizer
                $enable_comment = get_theme_mod('post_comment', true);

                // Check if comment enable on customizer
                if (true == $enable_comment) :
                    // If enable and comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number()) :
                        comments_template();
                    endif;
                endif;
                ?>

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
