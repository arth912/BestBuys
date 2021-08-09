<?php
// Return early if no widget found.
if (!is_active_sidebar('primary')) {
    return;
}

// Return if full width or full screen
if (in_array(outbuilt_post_layout(), array('full-width', 'full-width-narrow'))) {
    return;
} ?>

<div id="secondary" class="widget-area" aria-label="<?php echo esc_attr_x('Primary Sidebar', 'Sidebar aria label', 'outbuilt'); ?>">
    <?php dynamic_sidebar(outbuilt_get_sidebar()); ?>
</div><!-- #secondary -->
