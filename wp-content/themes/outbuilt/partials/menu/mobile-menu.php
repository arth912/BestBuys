<?php if (has_nav_menu('mobile')) : ?>
    <nav class="mobile-navigation">
        <a href="#" class="menu-mobile"><i class="icon-cancel"></i> <?php esc_html_e('Close Menu', 'outbuilt'); ?></a>

        <div class="icon-navigation">
            <form id="searchform-mobile" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input class="search-field" type="search" name="s" id="s" placeholder="<?php echo esc_attr_x('Press enter to search &hellip;', 'placeholder', 'outbuilt') ?>" autocomplete="off" value="<?php echo esc_attr(get_search_query()); ?>" title="<?php echo esc_attr_x('Search for:', 'label', 'outbuilt') ?>">
            </form>
        </div>

        <?php wp_nav_menu(
            array(
                'theme_location'  => 'mobile',
                'menu_id'         => 'menu-mobile-items',
                'menu_class'      => 'menu-mobile-items',
                'container'       => false
            )
        ); ?>
    </nav>
<?php endif; ?>
