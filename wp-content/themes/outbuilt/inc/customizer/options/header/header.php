<?php

/**
 * Header panel
 */
Kirki::add_panel('header', array(
    'title'          => esc_attr__('Header', 'outbuilt'),
    'description'    => esc_attr__('Customize the header area of the theme.', 'outbuilt'),
    'priority'       => 140,
));

/**
 * Header section
 */
Kirki::add_section('header_settings', array(
    'title'          => esc_attr__('General', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'header'
));

/**
 * Background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'header_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'header_settings',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.site-header',
            'property' => 'background-color',
            'exclude'  => array('#ffffff'),
        ),
    ),
    'transport'   => 'auto',
));
