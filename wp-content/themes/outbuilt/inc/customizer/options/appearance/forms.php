<?php

/**
 * Forms section
 */
Kirki::add_section('forms', array(
    'title'          => esc_attr__('Forms', 'outbuilt'),
    'priority'       => 20,
    'panel'          => 'appearance'
));

/**
 * Forms background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'forms_bg_color',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'forms',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_forms_selector(),
            'property' => 'background-color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Button border radius
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'forms_radius',
    'label'       => esc_attr__('Forms Shape', 'outbuilt'),
    'description' => esc_attr__('Control the shape of the input.', 'outbuilt'),
    'section'     => 'forms',
    'default'     => '3',
    'choices'      => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_forms_selector(),
            'property' => 'border-radius',
            'units'    => 'px',
            'exclude'  => array('3')
        ),
    ),
    'transport'    => 'auto',
));
