<?php
$outbuilt_search_icon = get_theme_mod('search_icon', true);
$outbuilt_custom_text = get_theme_mod('custom_text_header');

if (true == $outbuilt_search_icon) :
?>
    <div class="search-icon">
        <a href="#search-overlay" class="search-toggle">
            <i class="icon-search"></i>
        </a>
    </div>
<?php else : ?>
    <div class="custom-text">
        <?php echo wp_kses_post($outbuilt_custom_text); ?>
    </div>
<?php endif; ?>
