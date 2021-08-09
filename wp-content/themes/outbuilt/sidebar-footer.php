<?php
// Get the customizer data.
$widget_columns = get_theme_mod('footer_widgets_columns', '4');

// Return early if no widget found.
if (is_active_sidebar('footer-1')) :
?>

    <div class="sidebar-footer widget-column-<?php echo sanitize_html_class($widget_columns); ?>">
        <div class="container">

            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="footer-column footer-column-1">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-2')) : ?>
                <div class="footer-column footer-column-2">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php endif; ?>

            <?php if ($widget_columns == '3' || $widget_columns == '4') : ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer-column footer-column-3">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

            <?php if ($widget_columns == '4') : ?>

                <?php if (is_active_sidebar('footer-4')) : ?>
                    <div class="footer-column footer-column-4">
                        <?php dynamic_sidebar('footer-4'); ?>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

        </div>
    </div>

<?php endif; ?>
