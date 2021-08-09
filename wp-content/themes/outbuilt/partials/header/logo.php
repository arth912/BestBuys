<?php
// Get the log.
$logo_id  = get_theme_mod('custom_logo');
$logo_url = wp_get_attachment_image_src($logo_id, 'full');

// Retina logo.
$retina_id  = get_theme_mod('retina_logo');
$retina_url = wp_get_attachment_image_src($retina_id, 'full');

if ($logo_id) :
?>
    <div class="site-branding">
        <div class="logo">
            <a href="<?php echo esc_url(home_url()); ?>" rel="home">
                <?php if ($retina_id) { ?>
                    <img srcset="<?php echo esc_url($retina_url[0]); ?> 2x" src="<?php echo esc_url($logo_url[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
                <?php } else { ?>
                    <img src="<?php echo esc_url($logo_url[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
                <?php } ?>
            </a>
        </div>
    </div>
<?php else : ?>
    <div class="site-branding">
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url()); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
        </h1>
    </div>
<?php endif; ?>
