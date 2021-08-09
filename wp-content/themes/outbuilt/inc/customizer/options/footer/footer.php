<?php

/**
 * Footer panel
 */
Kirki::add_panel('footer', array(
    'title'          => esc_attr__('Footer', 'outbuilt'),
    'description'    => esc_attr__('Customize the footer area of the theme.', 'outbuilt'),
    'priority'       => 150,
));

/**
 * Footer widgets
 */
Kirki::add_section('footer_widgets', array(
    'title'          => esc_attr__('Footer Widgets', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'footer'
));

/**
 * Columns
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'footer_widgets_columns',
    'label'       => esc_attr__('Columns', 'outbuilt'),
    'description' => esc_attr__('Footer widgets columns.', 'outbuilt'),
    'section'     => 'footer_widgets',
    'default'     => '4',
    'choices'      => array(
        'min'  => 2,
        'max'  => 4,
        'step' => 1,
    ),
));

/**
 * Background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'footer_widgets_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'footer_widgets',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.sidebar-footer',
            'property' => 'background-color',
            'exclude'  => array('#212121')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'footer_widgets_color',
    'label'       => esc_attr__('Color', 'outbuilt'),
    'section'     => 'footer_widgets',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.sidebar-footer',
            'property' => 'color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Link Color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'footer_widgets_color_link',
    'label'       => esc_attr__('Color: Link', 'outbuilt'),
    'section'     => 'footer_widgets',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.sidebar-footer .widget a',
            'property' => 'color',
            'exclude'  => array('#ffffff')
        ),
        array(
            'element'  => '.sidebar-footer .widget a:visited',
            'property' => 'color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Link Color: Hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'footer_widgets_color_hover',
    'label'       => esc_attr__('Color: Hover', 'outbuilt'),
    'section'     => 'footer_widgets',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.sidebar-footer .widget a:hover',
            'property' => 'color',
            'exclude'  => array('#4ab3f4')
        ),
        array(
            'element'  => '.sidebar-footer .widget li a:hover',
            'property' => 'color',
            'exclude'  => array('#4ab3f4')
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Widget title
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'footer_widgets_title',
    'label'       => esc_attr__('Widget Title', 'outbuilt'),
    'section'     => 'footer_widgets',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'font-size'      => '15px',
        'letter-spacing' => '0',
        'color'          => '#ffffff',
        'text-transform' => 'uppercase'
    ),
    'output'       => array(
        array(
            'element'  => '.sidebar-footer .widget-title'
        ),
    ),
));
