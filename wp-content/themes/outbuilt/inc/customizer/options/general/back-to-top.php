<?php

/**
 * Container section
 */
Kirki::add_section('back_to_top', array(
    'title'          => esc_attr__('Back To Top', 'outbuilt'),
    'priority'       => 15,
    'panel'          => 'general'
));


/**
 * Back to top
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'backtotop',
    'label'       => esc_attr__('Back To Top', 'outbuilt'),
    'description' => esc_attr__('Enable back to top button.', 'outbuilt'),
    'section'     => 'back_to_top',
    'default'     => '1'
));

/**
 * Background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'backtotop_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'back_to_top',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.back-to-top',
            'property' => 'background-color',
            'exclude'  => array('#4ab3f4'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'backtotop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));

/**
 * Background color hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'backtotop_bg_hover',
    'label'       => esc_attr__('Background Color: Hover', 'outbuilt'),
    'section'     => 'back_to_top',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.back-to-top:hover',
            'property' => 'background-color',
            'exclude'  => array('#212121'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'backtotop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));

/**
 * Width
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'backtotop_width',
    'label'       => esc_attr__('Width', 'outbuilt'),
    'description' => esc_attr__('Control the width of the back to top button.', 'outbuilt'),
    'section'     => 'back_to_top',
    'default'     => '4',
    'choices'     => array(
        'min'  => '4',
        'max'  => '10',
        'step' => '1',
    ),
    'output'      => array(
        array(
            'element'  => '.back-to-top',
            'property' => 'width',
            'units'    => 'rem',
            'exclude'  => array('4'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'backtotop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));

/**
 * Height
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'backtotop_height',
    'label'       => esc_attr__('Height', 'outbuilt'),
    'description' => esc_attr__('Control the height of the back to top button.', 'outbuilt'),
    'section'     => 'back_to_top',
    'default'     => '4',
    'choices'     => array(
        'min'  => '4',
        'max'  => '10',
        'step' => '1',
    ),
    'output'      => array(
        array(
            'element'  => '.back-to-top',
            'property' => 'height',
            'units'    => 'rem',
            'exclude'  => array('4'),
        ),
        array(
            'element'  => '.back-to-top',
            'property' => 'line-height',
            'units'    => 'rem',
            'exclude'  => array('4'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'backtotop',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));
