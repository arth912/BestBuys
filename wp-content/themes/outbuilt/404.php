<?php get_header(); ?>

<?php do_action('outbuilt_content_container_before'); ?>

<div class="container">

    <?php do_action('outbuilt_content_before'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="error-404 not-found">

                <header class="not-found-header">
                    <h1 class="not-found-title"><?php esc_html_e('404', 'outbuilt'); ?></h1>
                </header><!-- .not-found-header -->

                <div class="not-found-content">
                    <h3><?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'outbuilt'); ?></h3>
                    <p><?php esc_html_e('You can go back to the Homepage or maybe try our search box below', 'outbuilt'); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .notfound-content -->

            </section><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php do_action('outbuilt_content_after'); ?>

</div><!-- .container -->

<?php do_action('outbuilt_content_container_after'); ?>

<?php get_footer(); ?>
