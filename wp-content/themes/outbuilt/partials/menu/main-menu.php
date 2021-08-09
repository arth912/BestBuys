<?php if (has_nav_menu('menu-1')) : ?>
    <nav class="main-navigation" id="site-navigation">

        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'menu-1',
                'menu_id'         => 'menu-primary-items',
                'menu_class'      => 'menu-primary-items menu',
                'container'       => false
            )
        );
        ?>

        <?php if (has_nav_menu('mobile')) : ?>
            <a href="#" class="menu-mobile"><i class="icon-menu"></i></a>
        <?php endif; ?>

        <div class="right-navigation">
            <?php if (outbuilt_is_woocommerce_activated()) outbuilt_wc_header_cart(); ?>
            <?php if (has_nav_menu('social')) : ?>
                <?php wp_nav_menu(
                    array(
                        'container_class' => 'menu-social-container',
                        'theme_location'  => 'social',
                        'link_before'     => '<span class="screen-reader-text">',
                        'link_after'      => '</span>',
                        'depth'           => 1,
                        'menu_id'         => 'social-menu',
                        'menu_class'      => 'social-menu'
                    )
                ); ?>
            <?php endif; ?>
            <?php get_template_part('partials/menu/search'); ?>
        </div>

    </nav>
<?php endif; ?>
