<?php
// Wrapper classes
$classes = array('site-header');

if (function_exists('wp_megamenu')) {
    $wpmm_nav_location_settings = get_wpmm_option('primary');
    if (!empty($wpmm_nav_location_settings['is_enabled'])) {
        $classes[] = 'megamenu-active';
    }
}

$classes = implode(' ', $classes);
?>

<header id="masthead" class="<?php echo esc_attr($classes); ?>">
    <div class="container">

        <?php get_template_part('partials/header/logo'); ?>

        <?php get_template_part('partials/menu/main', 'menu'); ?>

    </div><!-- .container -->
</header><!-- #masthead -->
