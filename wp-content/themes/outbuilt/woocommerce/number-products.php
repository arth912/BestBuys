<?php

/**
 * Number of products on shop page
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (is_single() || !have_posts()) return;

$num_prod = (isset($_GET['products-per-page'])) ? $_GET['products-per-page'] : 12;

$num_prod_x1 = 12;
$num_prod_x2 = $num_prod_x1 * 2;

$obj  = get_queried_object();
$get_link = '';

if (isset($obj->term_id)) {
    $get_link = get_term_link($obj->term_id, 'product_cat');

    if (is_wp_error($get_link)) {
        $get_link = get_term_link($obj->term_id, 'product_tag');
    }
} else {
    if (get_option('permalink_structure') == "") {
        $get_link = get_post_type_archive_link('product');
    } else {
        $get_link = get_permalink(wc_get_page_id('shop'));
    }
}

/**
 * Filter query link for products number
 *
 * @since 1.0.8
 * @param string $get_link The old query url
 */
$get_link = apply_filters('outbuilt_num_products_link', $get_link);

if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
        $get_link = add_query_arg($key, $value, $get_link);
    }
}
?>

<div class="wc-products-per-page">
    <span class="view-title"><?php esc_html_e('Show', 'outbuilt') ?> </span>
    <a class="view-12<?php if ($num_prod == $num_prod_x1) echo ' active'; ?>" href="<?php echo esc_url(add_query_arg('products-per-page', $num_prod_x1, $get_link)) ?>"><?php echo $num_prod_x1 ?></a>
    <a class="view-24<?php if ($num_prod == $num_prod_x2) echo ' active'; ?>" href="<?php echo esc_url(add_query_arg('products-per-page', $num_prod_x2, $get_link)) ?>"><?php echo $num_prod_x2 ?></a>
    <a class="view-all<?php if ($num_prod == 'all') echo ' active'; ?>" href="<?php echo esc_url(add_query_arg('products-per-page', 'all', $get_link)) ?>"><?php esc_html_e('All', 'outbuilt') ?></a>
</div>
