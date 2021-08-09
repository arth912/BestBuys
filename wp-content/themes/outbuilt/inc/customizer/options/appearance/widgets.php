<?php

/**
 * Widgets section
 */
Kirki::add_section('widgets', array(
    'title'          => esc_attr__('Widgets', 'outbuilt'),
    'priority'       => 25,
    'panel'          => 'appearance'
));

/**
 * Widget title
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'widgets_title',
    'label'       => esc_attr__('Widget Title', 'outbuilt'),
    'section'     => 'widgets',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'font-size'      => '15px',
        'letter-spacing' => '0',
        'color'          => '#212121',
        'text-transform' => 'uppercase'
    ),
    'output'       => array(
        array(
            'element'  => '.widget-title'
        ),
    ),
));

/**
 * Widget title spacing
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'widgets_title_spacing',
    'label'       => esc_attr__('Title Spacing', 'outbuilt'),
    'description' => esc_attr__('Widget title margin bottom.', 'outbuilt'),
    'section'     => 'widgets',
    'default'     => '2',
    'choices'      => array(
        'min'  => 1,
        'max'  => 10,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.widget-area .widget-title',
            'property' => 'margin-bottom',
            'units'    => 'rem',
            'exclude'  => array('2')
        ),
    ),
    'transport'    => 'auto',
));

/**
 * Widget spacing
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'widgets_spacing',
    'label'       => esc_attr__('Widget Spacing', 'outbuilt'),
    'description' => esc_attr__('The space between widgets', 'outbuilt'),
    'section'     => 'widgets',
    'default'     => '6',
    'choices'      => array(
        'min'  => 6,
        'max'  => 10,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => '.widget',
            'property' => 'margin-bottom',
            'units'    => 'rem',
            'exclude'  => array('6')
        ),
    ),
    'transport'    => 'auto',
));
