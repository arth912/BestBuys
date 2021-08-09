<?php

/**
 * Container section
 */
Kirki::add_section('container', array(
    'title'          => esc_attr__('Container', 'outbuilt'),
    'priority'       => 5,
    'panel'          => 'general'
));

/**
 * Container style
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio',
    'settings'    => 'container_style',
    'label'       => esc_attr__('Container', 'outbuilt'),
    'description' => esc_attr__('Select the container style.', 'outbuilt'),
    'section'     => 'container',
    'default'     => 'full-width',
    'choices'     => array(
        'full-width' => esc_attr__('Full Width', 'outbuilt'),
        'boxed'      => esc_attr__('Boxed', 'outbuilt'),
        'framed'     => esc_attr__('Framed', 'outbuilt'),
    ),
));

/**
 * Outer background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'outer_bg_color',
    'label'       => esc_attr__('Outer Background Color', 'outbuilt'),
    'section'     => 'container',
    'default'     => '#f2f2f2',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'background-color',
            'exclude'  => array('#f2f2f2')
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'container_style',
            'operator' => '!=',
            'value'    => 'full-width',
        ),
    ),
));

/**
 * Container width
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'dimension',
    'settings'    => 'container_width',
    'label'       => esc_attr__('Container Width', 'outbuilt'),
    'description' => esc_attr__('Controls how wide your content is on larger screens. Default: 117rem', 'outbuilt'),
    'section'     => 'container',
    'default'     => '117rem',
    'output'      => array(
        array(
            'element'  => '.container, .elementor-section.elementor-section-boxed > .elementor-container',
            'property' => 'max-width',
            'media_query' => '@media (min-width: 1200px)'
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.container',
            'property' => 'max-width',
            'function' => 'css',
        ),
    ),
    'choices' => array(
        'units' => array('px', '%', 'rem')
    ),
));

/**
 * Container color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'bg_color',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'container',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.wide-container',
            'property' => 'background-color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
));
