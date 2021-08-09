<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <?php
            the_post_thumbnail('post-thumbnail', array(
                'alt' => the_title_attribute(array(
                    'echo' => false,
                )),
            ));
            ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'outbuilt'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <?php edit_post_link(esc_html__('Edit', 'outbuilt'), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>'); ?>

</article>
