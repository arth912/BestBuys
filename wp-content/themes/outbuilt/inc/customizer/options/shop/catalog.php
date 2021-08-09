<?php

/**
 * Shop title
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'text',
    'settings' => 'shop_title',
    'label'    => esc_attr__('Catalog Title', 'outbuilt'),
    'section'  => 'woocommerce_product_catalog',
    'default'  => esc_attr__('All Products', 'outbuilt')
));

/**
 * Shop description
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'textarea',
    'settings' => 'shop_desc',
    'label'    => esc_attr__('Catalog Description', 'outbuilt'),
    'section'  => 'woocommerce_product_catalog',
    'default'  => esc_attr__('You can add your shop description here.', 'outbuilt')
));

/**
 * Product to show
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'number',
    'settings' => 'shop_products_per_page',
    'label'    => esc_attr__('Product per page', 'outbuilt'),
    'section'  => 'woocommerce_product_catalog',
    'default'  => 9,
));

/**
 * Shop layout
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio-image',
    'settings'    => 'shop_layout',
    'label'       => esc_attr__('Shop Layout', 'outbuilt'),
    'section'     => 'woocommerce_product_catalog',
    'default'     => 'right-sidebar',
    'choices'     => array(
        'right-sidebar'     => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/rs.png',
        'left-sidebar'      => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/ls.png',
        'full-width'        => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fw.png',
        'full-width-narrow' => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fwn.png',
    ),
));
