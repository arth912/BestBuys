<?php

/**
 * Ads panel
 */
Kirki::add_panel('ads', array(
    'title'          => esc_attr__('Advertisement', 'outbuilt'),
    'priority'       => 155,
));

/**
 * General
 */
Kirki::add_section('ads_general', array(
    'title'          => esc_attr__('General', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'ads'
));

/**
 * Header ads
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'textarea',
    'settings' => 'header_ad',
    'label'    => esc_html__('Header Ad', 'outbuilt'),
    'desc'     => esc_html__('Put your ad code here. Exclude home page by default.', 'outbuilt'),
    'section'  => 'ads_general',
    'default'  => '',
));

/**
 * Footer ads
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'textarea',
    'settings' => 'footer_ad',
    'label'    => esc_html__('Footer Ad', 'outbuilt'),
    'desc'     => esc_html__('Put your ad code here.', 'outbuilt'),
    'section'  => 'ads_general',
    'default'  => '',
));
