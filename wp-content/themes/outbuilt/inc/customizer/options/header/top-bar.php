<?php

/**
 * Top bar section
 */
Kirki::add_section('top_bar', [
    'title'          => esc_attr__('Top Bar', 'outbuilt'),
    'priority'       => 5,
    'panel'          => 'header'
]);

/**
 * Enable top bar
 */
Kirki::add_field('outbuilt_options', [
    'type'        => 'toggle',
    'settings'    => 'top_bar_enable',
    'label'       => esc_attr__('Top Bar', 'outbuilt'),
    'description' => esc_attr__('Enable top bar', 'outbuilt'),
    'section'     => 'top_bar',
    'default'     => '1'
]);

/**
 * Enable social icons
 */
Kirki::add_field('outbuilt_options', [
    'type'        => 'toggle',
    'settings'    => 'top_bar_social',
    'label'       => esc_attr__('Social Icons', 'outbuilt'),
    'description' => esc_attr__('Enable social icons', 'outbuilt'),
    'section'     => 'top_bar',
    'default'     => '1',
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
]);

/**
 * Phone
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'text',
    'settings' => 'top_bar_phone',
    'label'    => esc_attr__('Phone', 'outbuilt'),
    'section'  => 'top_bar',
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element' => '.top-bar-phone a',
            'function' => 'html'
        )
    ),
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Email
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'email',
    'settings' => 'top_bar_email',
    'label'    => esc_attr__('Email', 'outbuilt'),
    'section'  => 'top_bar',
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element' => '.top-bar-email a',
            'function' => 'html'
        )
    ),
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Top bar background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'top_bar_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'top_bar',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.top-bar',
            'property' => 'background-color',
            'exclude'  => array('#4ab3f4'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Top bar color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'top_bar_color',
    'label'       => esc_attr__('Text Color', 'outbuilt'),
    'section'     => 'top_bar',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.top-bar',
            'property' => 'color',
            'exclude'  => array('#ffffff'),
        ),
        array(
            'element'  => '.top-bar a',
            'property' => 'color',
            'exclude'  => array('#ffffff'),
        ),
        array(
            'element'  => '.top-bar i',
            'property' => 'border-color',
            'exclude'  => array('#ffffff'),
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Top bar height
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'top_bar_height',
    'label'       => esc_attr__('Height', 'outbuilt'),
    'description' => esc_attr__('Control the height of the top bar area.', 'outbuilt'),
    'section'     => 'top_bar',
    'default'     => '10',
    'choices'     => array(
        'min'  => '5',
        'max'  => '25',
        'step' => '1',
    ),
    'output'      => array(
        array(
            'element'  => '.top-bar',
            'property' => 'padding-top',
            'units'    => 'px',
            'exclude'  => array('10')
        ),
        array(
            'element'  => '.top-bar',
            'property' => 'padding-bottom',
            'units'    => 'px',
            'exclude'  => array('10')
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

// Top bar typography
Kirki::add_field('outbuilt_options', [
    'type'        => 'typography',
    'settings'    => 'top_bar_typography',
    'label'       => esc_attr__('Typography', 'outbuilt'),
    'section'     => 'top_bar',
    'default'     => [
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'font-size'      => '14px',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ],
    'transport'   => 'auto',
    'output'       => [
        [
            'element'  => '.top-bar'
        ],
    ],
    'required'    => array(
        array(
            'setting'  => 'top_bar_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
]);
