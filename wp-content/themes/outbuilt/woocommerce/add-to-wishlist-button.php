<?php

/**
 * Add to wishlist button template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 2.0.8
 */

global $product;
?>

<a href="<?php echo esc_url(add_query_arg('add_to_wishlist', $product_id)) ?>" rel="nofollow" data-product-id="<?php echo $product_id ?>" data-product-type="<?php echo $product_type ?>" class="tooltip-up <?php echo $link_classes ?>" title="<?php echo esc_attr($label) ?>">
    <i class="icon-heart-empty"></i>
</a>
<div class="loader-wrapper ajax-loading single-product-wishlist-loader"><svg class="wc-loader" viewBox="0 0 50 50">
        <circle class="wc-path" cx="25" cy="25" r="20"></circle>
    </svg></div>
