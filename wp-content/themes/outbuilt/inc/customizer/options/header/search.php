<?php

/**
 * Search section
 */
Kirki::add_section('search', array(
    'title'          => esc_attr__('Search', 'outbuilt'),
    'priority'       => 25,
    'panel'          => 'header'
));

/**
 * Search
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'search_icon',
    'label'       => esc_attr__('Search', 'outbuilt'),
    'description' => esc_attr__('Enable search icon in header.', 'outbuilt'),
    'section'     => 'search',
    'default'     => '1'
));

/**
 * Search color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'search_color',
    'label'       => esc_attr__('Search Icon Color', 'outbuilt'),
    'section'     => 'search',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.search-icon .search-toggle',
            'property' => 'color',
            'exclude'  => array('#212121'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'search_icon',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Search color: hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'search_color_hover',
    'label'       => esc_attr__('Search Icon Color: Hover', 'outbuilt'),
    'section'     => 'search',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.search-icon .search-toggle:hover',
            'property' => 'color',
            'exclude'  => array('#212121'),
        ),
        array(
            'element'  => '.search-icon .search-toggle:visited:hover',
            'property' => 'color',
            'exclude'  => array('#212121'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'search_icon',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));
