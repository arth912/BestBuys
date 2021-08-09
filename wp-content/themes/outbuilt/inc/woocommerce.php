<?php

/**
 * WooCommerce compatibility and custom functions
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 * @return void
 */
function outbuilt_wc_setup() {
    add_theme_support('woocommerce', apply_filters('outbuilt_wc_args', array(
        'product_grid'          => array(
            'default_columns' => 3,
            'default_rows'    => 4,
            'min_columns'     => 1,
            'max_columns'     => 6,
            'min_rows'        => 1
        )
    )));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'outbuilt_wc_setup');

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function outbuilt_wc_scripts() {

    $font_path   = WC()->plugin_url() . '/assets/fonts/';
    $inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

    wp_add_inline_style('outbuilt-style', $inline_font);
}
add_action('wp_enqueue_scripts', 'outbuilt_wc_scripts');

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Remove WooCommerce breadcrumbs.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/**
 * Remove WooCommerce shop title.
 */
add_filter('woocommerce_show_page_title', '__return_false');

/**
 * Quick view integration
 */
add_filter('woosq_button_position', function () {
    return '0';
});

/**
 * Smart compare integration
 */
add_filter('filter_wooscp_button_archive', function () {
    return '0';
});
add_filter('filter_wooscp_button_single', function () {
    return '0';
});

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function outbuilt_wc_active_body_class($classes) {
    $classes[] = 'woocommerce-active';

    return $classes;
}
add_filter('body_class', 'outbuilt_wc_active_body_class');

/**
 * Full width layout for cart and checkout page.
 */
function outbuilt_wc_page_layout($class) {

    if (is_cart() || is_checkout()) {
        $class = 'full-width';
    }

    if (is_shop() || is_product_category() || is_product_tag()) {
        $layout = get_theme_mod('shop_layout', 'right-sidebar');
        $class = $layout;
    }

    return $class;
}
add_filter('outbuilt_post_layout_class', 'outbuilt_wc_page_layout', 10);

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function outbuilt_wc_loop_columns() {
    return 3;
}
add_filter('loop_shop_columns', 'outbuilt_wc_loop_columns');

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function outbuilt_wc_related_products_args($args) {
    $defaults = array(
        'posts_per_page' => 3,
        'columns'        => 3,
    );

    $args = wp_parse_args($defaults, $args);

    return $args;
}
add_filter('woocommerce_output_related_products_args', 'outbuilt_wc_related_products_args');
add_filter('woocommerce_upsell_display_args', 'outbuilt_wc_related_products_args');

if (!function_exists('outbuilt_wc_product_columns_wrapper')) {
    /**
     * Product columns wrapper.
     *
     * @return  void
     */
    function outbuilt_wc_product_columns_wrapper() {
        $columns = outbuilt_wc_loop_columns();
        echo '<div class="products-wrapper columns-' . absint($columns) . '">';
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_product_columns_wrapper', 40);

if (!function_exists('outbuilt_wc_product_columns_wrapper_close')) {
    /**
     * Product columns wrapper close.
     *
     * @return  void
     */
    function outbuilt_wc_product_columns_wrapper_close() {
        echo '</div>';
    }
}
add_action('woocommerce_after_shop_loop', 'outbuilt_wc_product_columns_wrapper_close', 40);

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);



if (!function_exists('outbuilt_wc_wrapper_after')) {
    /**
     * After Content.
     *
     * Closes the wrapping divs.
     *
     * @return void
     */
    function outbuilt_wc_wrapper_after() {
?>
        </main><!-- #main -->
        </div><!-- #primary -->
    <?php
    }
}
add_action('woocommerce_after_main_content', 'outbuilt_wc_wrapper_after');

if (!function_exists('outbuilt_wc_after_sidebar')) {
    /**
     * After Sidebar.
     *
     * Closes the container div.
     *
     * @return void
     */
    function outbuilt_wc_after_sidebar() {
    ?>
        </div><!-- .container -->
    <?php
    }
}
add_action('woocommerce_sidebar', 'outbuilt_wc_after_sidebar');

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'outbuilt_wc_header_cart' ) ) {
			outbuilt_wc_header_cart();
		}
	?>
 */

if (!function_exists('outbuilt_wc_cart_link_fragment')) {
    /**
     * Cart Fragments.
     *
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param array $fragments Fragments to refresh via AJAX.
     * @return array Fragments to refresh via AJAX.
     */
    function outbuilt_wc_cart_link_fragment($fragments) {
        ob_start();
        outbuilt_wc_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
}
add_filter('woocommerce_add_to_cart_fragments', 'outbuilt_wc_cart_link_fragment');

if (!function_exists('outbuilt_wc_cart_link')) {
    /**
     * Cart Link.
     *
     * Displayed a link to the cart including the number of items present and the cart total.
     *
     * @return void
     */
    function outbuilt_wc_cart_link() {
    ?>
        <a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'outbuilt'); ?>">
            <span class="count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span>
            <i class="icon-shopping-basket"></i>
        </a>
    <?php
    }
}

if (!function_exists('outbuilt_wc_header_cart')) {
    /**
     * Display Header Cart.
     *
     * @return void
     */
    function outbuilt_wc_header_cart() {
    ?>
        <ul id="site-header-cart" class="site-header-cart">
            <li>
                <?php outbuilt_wc_cart_link(); ?>
            </li>
            <li>
                <?php
                $instance = array(
                    'title' => '',
                );

                the_widget('WC_Widget_Cart', $instance);
                ?>
            </li>
        </ul>
    <?php
    }
}

if (!function_exists('outbuilt_wc_toolbar_wrapper_before')) {
    /**
     * Before toolbar.
     *
     * Wraps products toolbar WooCommerce content.
     *
     * @return void
     */
    function outbuilt_wc_toolbar_wrapper_before() {
    ?>
        <div class="wc-toolbar">
        <?php
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_toolbar_wrapper_before', 9);

if (!function_exists('outbuilt_wc_toolbar_wrapper_after')) {
    /**
     * After toolbar.
     *
     * Closes the products toolbar wrapping divs.
     *
     * @return void
     */
    function outbuilt_wc_toolbar_wrapper_after() {
        ?>
        </div><!-- .wc-toolbar -->
    <?php
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_toolbar_wrapper_after', 35);

if (!function_exists('outbuilt_wc_toolbar_left_wrapper_before')) {
    /**
     * Before toolbar left.
     *
     * Wraps products toolbar WooCommerce content.
     *
     * @return void
     */
    function outbuilt_wc_toolbar_left_wrapper_before() {
    ?>
        <div class="wc-toolbar-left">
        <?php
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_toolbar_left_wrapper_before', 19);

if (!function_exists('outbuilt_wc_toolbar_left_wrapper_after')) {
    /**
     * After toolbar left.
     *
     * Wraps products toolbar WooCommerce content.
     *
     * @return void
     */
    function outbuilt_wc_toolbar_left_wrapper_after() {
        ?>
        </div><!-- .wc-toolbar-left -->
    <?php
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_toolbar_left_wrapper_after', 22);

if (!function_exists('outbuilt_wc_toolbar_right_wrapper_before')) {
    /**
     * Before toolbar right.
     *
     * Wraps products toolbar WooCommerce content.
     *
     * @return void
     */
    function outbuilt_wc_toolbar_right_wrapper_before() {
    ?>
        <div class="wc-toolbar-right">
        <?php
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_toolbar_right_wrapper_before', 29);

if (!function_exists('outbuilt_wc_toolbar_right_wrapper_after')) {
    /**
     * After toolbar right.
     *
     * Wraps products toolbar WooCommerce content.
     *
     * @return void
     */
    function outbuilt_wc_toolbar_right_wrapper_after() {
        ?>
        </div><!-- .wc-toolbar-right -->
    <?php
    }
}
add_action('woocommerce_before_shop_loop', 'outbuilt_wc_toolbar_right_wrapper_after', 32);

if (!function_exists('outbuilt_number_products')) {

    /**
     * Custom number of products switch
     */
    function outbuilt_number_products() {
        if (function_exists('wc_get_template')) {
            wc_get_template('number-products.php');
        }
    }
}
// add_action('woocommerce_before_shop_loop', 'outbuilt_number_products', 20);

/**
 * Products per page
 */
function outbuilt_products_per_page($cols) {
    $products_per_page = get_theme_mod('shop_products_per_page', 9);
    $cols = $products_per_page;
    return $cols;
}
add_filter('loop_shop_per_page', 'outbuilt_products_per_page', 20);

/**
 * Remove default product thumbnail
 */
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

if (!function_exists('outbuilt_product_thumbnail')) {
    /**
     * Catalog thumbnail swap
     */
    function outbuilt_product_thumbnail() {
        if (function_exists('wc_get_template')) {
            wc_get_template('image-swap.php');
        }
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'outbuilt_product_thumbnail', 10);

/**
 * Change close link position
 */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 11);

if (!function_exists('outbuilt_wc_thumbnail_wrapper_before')) {
    /**
     * Wrap image and custom buttons.
     */
    function outbuilt_wc_thumbnail_wrapper_before() {
    ?>
        <div class="wc-product-image">
        <?php
    }
}
add_action('woocommerce_before_shop_loop_item', 'outbuilt_wc_thumbnail_wrapper_before', 9);

if (!function_exists('outbuilt_wc_thumbnail_wrapper_after')) {
    /**
     * Close wrap image and custom buttons.
     */
    function outbuilt_wc_thumbnail_wrapper_after() {
        ?>
        </div>
        <?php
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'outbuilt_wc_thumbnail_wrapper_after', 12);

if (!function_exists('outbuilt_wc_plugins_integration')) {
    /**
     * Extra plugins integration
     */
    function outbuilt_wc_plugins_integration() {
        global $product;

        if (outbuilt_is_yww_activated() || outbuilt_is_quick_view_activated() || outbuilt_is_smart_compare_activated()) {
        ?>
            <ul class="wc-button-actions">
                <li class="wc-wishlist">
                    <?php
                    if (outbuilt_is_yww_activated()) {
                        echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                    }
                    ?>
                </li>
                <li class="wc-quick-view">
                    <?php
                    if (outbuilt_is_quick_view_activated()) {
                        echo '<a href="#" class="woosq-btn woosq-btn-' . esc_attr($product->get_id()) . ' ' . get_option('woosq_button_class') . '" data-id="' . esc_attr($product->get_id()) . '"><i class="icon-eye"></i></a>';
                    }
                    ?>
                </li>
                <li class="wc-smart-compare">
                    <?php
                    if (outbuilt_is_smart_compare_activated()) {
                        echo '<a href="#" class="wooscp-btn wooscp-btn-' . esc_attr($product->get_id()) . ' ' . get_option('_wooscp_button_class') . '" data-id="' . esc_attr($product->get_id()) . '"><i class="icon-arrows-cw"></i></a>';
                    }
                    ?>
                </li>
            </ul>
        <?php
        }
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'outbuilt_wc_plugins_integration', 11);
add_action('woocommerce_after_add_to_cart_button', 'outbuilt_wc_plugins_integration', 10);

if (!function_exists('outbuilt_wc_details_wrapper_before')) {
    /**
     * Wrap product details.
     */
    function outbuilt_wc_details_wrapper_before() {
        ?>
        <div class="wc-product-details">
        <?php
    }
}
add_action('woocommerce_shop_loop_item_title', 'outbuilt_wc_details_wrapper_before', 9);

if (!function_exists('outbuilt_wc_details_wrapper_after')) {
    /**
     * Close wrap product details.
     */
    function outbuilt_wc_details_wrapper_after() {
        ?>
        </div>
    <?php
    }
}
add_action('woocommerce_after_shop_loop_item', 'outbuilt_wc_details_wrapper_after', 11);

/**
 * Remove title
 */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

if (!function_exists('outbuilt_wc_product_title')) {
    /**
     * Product title with link
     */
    function outbuilt_wc_product_title() {
    ?>
        <a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_title(); ?></a>
    <?php
    }
}
add_action('woocommerce_shop_loop_item_title', 'outbuilt_wc_product_title', 10);

/**
 * Change rating position in single product
 */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 4);

if (!function_exists('outbuilt_before_order_review')) :
    /**
     * Checkout page before order review
     *
     * @since   1.0.0
     */
    function outbuilt_before_order_review() {
        echo '<div class="review-order-wrapper">';
    }
endif;
add_action('woocommerce_checkout_after_customer_details', 'outbuilt_before_order_review', 10);

if (!function_exists('outbuilt_after_order_review')) :
    /**
     * Checkout page after order review
     *
     * @since   1.0.0
     */
    function outbuilt_after_order_review() {
        echo '</div>';
    }
endif;
add_action('woocommerce_checkout_after_order_review', 'outbuilt_after_order_review', 10);


if (!function_exists('outbuilt_wc_wrapper_before')) {
    /**
     * Before Content.
     *
     * Wraps all WooCommerce content in wrappers which match the theme markup.
     *
     * @return void
     */
    function outbuilt_wc_wrapper_before() { ?>
        <div class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
            <?php }
    }
    add_action('woocommerce_before_main_content', 'outbuilt_wc_wrapper_before');
