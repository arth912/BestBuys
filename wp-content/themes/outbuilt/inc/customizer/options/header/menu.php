<?php

/**
 * Menu section
 */
Kirki::add_section('menu', array(
    'title'          => esc_attr__('Menu', 'outbuilt'),
    'priority'       => 15,
    'panel'          => 'header'
));

/**
 * Typography
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'menu_typography',
    'label'       => esc_attr__('Typography', 'outbuilt'),
    'section'     => 'menu',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '400',
        'font-size'      => '16px',
        'letter-spacing' => '0',
    ),
    'output'       => array(
        array(
            'element'  => '.menu-primary-items a',
            'suffix'   => '!important'
        ),
    ),
));

/**
 * Menu color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'menu_color',
    'label'       => esc_attr__('Color', 'outbuilt'),
    'section'     => 'menu',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-primary-items a',
            'property' => 'color',
            'exclude'  => array('#212121'),
            'suffix'   => '!important'
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Menu color hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'menu_color_hover',
    'label'       => esc_attr__('Color: Hover', 'outbuilt'),
    'section'     => 'menu',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-primary-items a:hover',
            'property' => 'color',
            'exclude'  => array('#4ab3f4'),
            'suffix'   => '!important'
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Menu color current menu item
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'menu_color_current',
    'label'       => esc_attr__('Color: Current Menu', 'outbuilt'),
    'section'     => 'menu',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-primary-items li.current-menu-item > a',
            'property' => 'color',
            'exclude'  => array('#4ab3f4'),
            'suffix'   => '!important'
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Spacing
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'menu_spacing',
    'label'       => esc_attr__('Spacing', 'outbuilt'),
    'description' => esc_attr__('Distance between menu item.', 'outbuilt'),
    'section'     => 'menu',
    'default'     => '4',
    'choices'     => array(
        'min'  => '1',
        'max'  => '10',
        'step' => '1',
    ),
    'output'      => array(
        array(
            'element'  => '.menu-primary-items li',
            'property' => 'margin-right',
            'units'    => 'rem',
            'exclude'  => array('4'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Info
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'custom',
    'settings'    => 'submenu',
    'section'     => 'menu',
    'default'     => '<div style="padding: 5px 8px;background-color: #f5f5f5; font-weight: 500; border: 1px solid rgba(0, 0, 0, 0.1);">' . esc_html__('Sub menu settings', 'outbuilt') . '</div>',
    'priority'    => 10,
));

/**
 * Submenu background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'submenu_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'menu',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-primary-items .sub-menu',
            'property' => 'background-color',
            'exclude'  => array('#212121'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Submenu color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'submenu_color',
    'label'       => esc_attr__('Color', 'outbuilt'),
    'section'     => 'menu',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-primary-items .sub-menu a',
            'property' => 'color',
            'exclude'  => array('#ffffff'),
            'suffix'   => '!important'
        ),
    ),
    'transport'   => 'auto',
));
