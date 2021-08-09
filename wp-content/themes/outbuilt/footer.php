</div><!-- #content -->

<?php do_action('outbuilt_footer_before'); ?>

<footer id="colophon" class="site-footer">

    <?php do_action('outbuilt_footer'); ?>

    <?php
    $copyright = get_theme_mod('copyrights_enable', true);
    if ($copyright) :
    ?>

        <div class="footer-text">
            <?php outbuilt_footer_text(); ?>
        </div>

    <?php endif; ?>

</footer><!-- #colophon -->

<?php do_action('outbuilt_footer_after'); ?>

</div><!-- .wide-container -->
</div><!-- #page -->

<div id="search-overlay" class="search-popup popup-content mfp-hide">
    <form method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" class="search-field field" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'outbuilt') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'outbuilt') ?>" />
    </form>
</div>

<?php outbuilt_back_to_top(); ?>

<?php wp_footer(); ?>

</body>

</html>
