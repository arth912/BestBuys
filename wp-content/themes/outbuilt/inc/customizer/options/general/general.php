<?php

/**
 * General panel
 */
Kirki::add_panel('general', array(
    'title'          => esc_attr__('General', 'outbuilt'),
    'description'    => esc_attr__('Customize general elements of the theme.', 'outbuilt'),
    'priority'       => 130,
));

/**
 * General section
 */
Kirki::add_section('general_settings', array(
    'title'          => esc_attr__('General Settings', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'general'
));

/**
 * Loading
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'loading',
    'label'       => esc_attr__('Page Loading', 'outbuilt'),
    'description' => esc_attr__('Enable page loading animation.', 'outbuilt'),
    'section'     => 'general_settings',
    'default'     => '1',
));
