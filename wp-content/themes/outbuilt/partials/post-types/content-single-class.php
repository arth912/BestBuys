<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php do_action('outbuilt_post_before'); ?>

    <div class="entry-content">

        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'outbuilt'),
            'after'  => '</div>',
        ));
        ?>

    </div>

    <?php do_action('outbuilt_post_after'); ?>

</article><!-- #post-## -->
