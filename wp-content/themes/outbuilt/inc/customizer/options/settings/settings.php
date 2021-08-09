<?php

/**
 * Settings panel
 */
Kirki::add_panel('settings', array(
    'title'          => esc_attr__('Settings', 'outbuilt'),
    'description'    => esc_attr__('Customize the theme settings.', 'outbuilt'),
    'priority'       => 160,
));

/**
 * Settings section
 */
Kirki::add_section('cpt_settings', array(
    'title'          => esc_attr__('Post Types', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'settings'
));

/**
 * Classes
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'classes_post_type',
    'label'       => esc_attr__('Classes', 'outbuilt'),
    'section'     => 'cpt_settings',
    'default'     => '1'
));
