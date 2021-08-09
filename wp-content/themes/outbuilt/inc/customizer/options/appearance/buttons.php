<?php

/**
 * Buttons section
 */
Kirki::add_section('buttons', array(
    'title'          => esc_attr__('Buttons', 'outbuilt'),
    'priority'       => 15,
    'panel'          => 'appearance'
));

/**
 * Button text
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'btn_text',
    'label'       => esc_attr__('Typography', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'font-size'      => '13px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'uppercase'
    ),
    'output'       => array(
        array(
            'element'  => outbuilt_button_selector()
        ),
    ),
));

/**
 * Button color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'btn_color',
    'label'       => esc_attr__('Color', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Button color: Hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'btn_color_hover',
    'label'       => esc_attr__('Color: Hover', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => implode(':hover, ', outbuilt_button_selector()),
            'property' => 'color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Button background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'btn_bg_color',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'background-color',
            'exclude'  => array('#212121')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Button background color: Hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'btn_bg_hover',
    'label'       => esc_attr__('Background Color: Hover', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => implode(':hover, ', outbuilt_button_selector()),
            'property' => 'background-color',
            'exclude'  => array('#4ab3f4')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Button height
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'btn_height',
    'label'       => esc_attr__('Button Height', 'outbuilt'),
    'description' => esc_attr__('Control the padding in pixels above and below your button text.', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '15',
    'choices'      => array(
        'min'  => 0,
        'max'  => 30,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'padding-top',
            'units'    => 'px',
            'exclude'  => array('15')
        ),
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'padding-bottom',
            'units'    => 'px',
            'exclude'  => array('15')
        ),
    ),
    'transport'    => 'auto',
));

/**
 * Button width
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'btn_width',
    'label'       => esc_attr__('Button Width', 'outbuilt'),
    'description' => esc_attr__('Control the padding in pixels to the left and right of your button text.', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '53',
    'choices'      => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'padding-left',
            'units'    => 'px',
            'exclude'  => array('53')
        ),
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'padding-right',
            'units'    => 'px',
            'exclude'  => array('53')
        ),
    ),
    'transport'    => 'auto',
));

/**
 * Button border radius
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'btn_radius',
    'label'       => esc_attr__('Button Shape', 'outbuilt'),
    'description' => esc_attr__('Control the shape of the button.', 'outbuilt'),
    'section'     => 'buttons',
    'default'     => '2',
    'choices'      => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1,
    ),
    'output'      => array(
        array(
            'element'  => outbuilt_button_selector(),
            'property' => 'border-radius',
            'units'    => 'px',
            'exclude'  => array('2')
        ),
    ),
    'transport'    => 'auto',
));
