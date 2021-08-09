<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php outbuilt_post_thumbnail(); ?>

    <header class="entry-header">

        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <div class="entry-meta">
            <?php outbuilt_post_meta(false); ?>
        </div>

    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <span class="more-link-wrapper">
        <a href="<?php the_permalink(); ?>" class="more-link"><?php esc_html_e('Continue Reading', 'outbuilt'); ?></a>
    </span>

    <?php outbuilt_related_posts(); ?>

</article><!-- #post-## -->
