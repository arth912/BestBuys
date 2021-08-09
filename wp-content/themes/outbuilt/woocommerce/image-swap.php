<?php

/**
 * Image Swap style thumbnail
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Return dummy image if no featured image is defined
if (!has_post_thumbnail()) {
    if (function_exists('wc_placeholder_img_src') && wc_placeholder_img_src()) {
        $placeholder = '<img src="' . wc_placeholder_img_src() . '" alt="' . __('Placeholder Image', 'outbuilt') . '" class="woo-entry-image-main" />';
        $placeholder = apply_filters('outbuilt_woo_placeholder_img_html', $placeholder);
        if ($placeholder) {
            echo $placeholder;
        }
    }
    return;
}

// Globals
global $product;

// Get first image
$attachment = get_post_thumbnail_id();
$main_image = wp_get_attachment_image($attachment, 'woocommerce_thumbnail', false, array('class' => 'wc-product-image-main'));

// Get Second Image in Gallery
$attachment_ids           = $product->get_gallery_image_ids();
$attachment_ids[]         = $attachment; // Add featured image to the array
$secondary_attachment_url = '';

if (!empty($attachment_ids)) {
    $attachment_ids = array_unique($attachment_ids); // remove duplicate images
    if (count($attachment_ids) > '1') {
        if ($attachment_ids['0'] !== $attachment) {
            $secondary_img_id = $attachment_ids['0'];
        } elseif ($attachment_ids['1'] !== $attachment) {
            $secondary_img_id = $attachment_ids['1'];
        }
    }
}

// Get secondary image output
if (!empty($secondary_img_id)) {
    $secondary_image = wp_get_attachment_image($secondary_img_id, 'woocommerce_thumbnail', false, array('class' => 'wc-product-image-secondary'));
} else {
    $secondary_image = false;
}

// Return thumbnail
if ($main_image && $secondary_image) : ?>

    <div class="wc-product-thumbnail thumbnail-swap">
        <?php echo $main_image; ?>
        <?php echo $secondary_image; ?>
    </div>

<?php else : ?>

    <div class="wc-product-thumbnail">
        <?php echo $main_image; ?>
    </div>

<?php endif; ?>
