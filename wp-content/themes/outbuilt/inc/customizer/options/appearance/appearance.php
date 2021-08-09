<?php

/**
 * Appearance panel
 */
Kirki::add_panel('appearance', array(
    'title'          => esc_attr__('Appearance', 'outbuilt'),
    'description'    => esc_attr__('Customize the design of the elements of the theme.', 'outbuilt'),
    'priority'       => 135,
));

/**
 * Global colors section
 */
Kirki::add_section('global_color', array(
    'title'          => esc_attr__('Global Colors', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'appearance'
));

/**
 * Primary color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => esc_attr__('Primary Color', 'outbuilt'),
    'section'     => 'global_color',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_primary_colors('colors'),
            'property' => 'color',
            'exclude'  => array('#4ab3f4')
        ),
        array(
            'element'  => outbuilt_primary_colors('backgrounds'),
            'property' => 'background-color',
            'exclude'  => array('#4ab3f4')
        ),
        array(
            'element'  => outbuilt_primary_colors('borders'),
            'property' => 'border-color',
            'exclude'  => array('#4ab3f4')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Text color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'text_color',
    'label'       => esc_attr__('Text Color', 'outbuilt'),
    'section'     => 'global_color',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'color',
            'exclude'  => array('#212121')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Heading color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'heading_color',
    'label'       => esc_attr__('Heading Color', 'outbuilt'),
    'section'     => 'global_color',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_heading_selector(),
            'property' => 'color',
            'exclude'  => array('#212121')
        ),
    ),
    'transport'   => 'auto',
));
