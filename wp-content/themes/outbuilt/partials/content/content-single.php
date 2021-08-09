<?php
// Vars
$tags  = get_theme_mod('post_tags', true);
$tag_title = get_theme_mod('post_tags_title', esc_attr__('Topics', 'outbuilt'));
?>
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

    <footer class="entry-footer">

        <?php
        $get_tags = get_the_tags();
        if (true == $tags && $get_tags) :
        ?>
            <span class="tag-links">
                <span class="tag-title block-title"><?php echo esc_html($tag_title); ?></span>
                <?php foreach ($get_tags as $post_tag) : ?>
                    <a href="<?php echo esc_url(get_tag_link($post_tag->term_id)); ?>">#<?php echo esc_attr($post_tag->name); ?></a>
                <?php endforeach; ?>
            </span>
        <?php endif; ?>

    </footer>

    <?php do_action('outbuilt_post_after'); ?>

</article><!-- #post-## -->
