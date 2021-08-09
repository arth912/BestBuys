<?php

/**
 * Typography section
 */
Kirki::add_section('typography', array(
    'title'          => esc_attr__('Global Typography', 'outbuilt'),
    'priority'       => 5,
    'panel'          => 'appearance'
));

/**
 * Body text
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'body_text',
    'label'       => esc_attr__('Body Text', 'outbuilt'),
    'section'     => 'typography',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ),
    'transport'   => 'auto',
    'output'       => array(
        array(
            'element'  => 'body'
        ),
    ),
));

/**
 * Heading text
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'heading_text',
    'label'       => esc_attr__('Heading Text', 'outbuilt'),
    'section'     => 'typography',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ),
    'transport'   => 'auto',
    'output'       => array(
        array(
            'element'  => outbuilt_heading_selector()
        ),
    ),
));
