<article class="entry content-shadow">

    <?php outbuilt_post_thumbnail(); ?>

    <div class="content-wrapper content-wrapper--small-gap">

        <header class="entry-header">

            <?php
            $category = get_the_category(get_the_ID());
            if ($category) :
            ?>
                <span class="cat-links">
                    <a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>"><?php echo esc_html($category[0]->name); ?></a>
                </span>
            <?php endif; // End if categories
            ?>

            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

            <div class="entry-meta">
                <?php outbuilt_post_meta(false); ?>
            </div>

        </header>

    </div>

</article>
