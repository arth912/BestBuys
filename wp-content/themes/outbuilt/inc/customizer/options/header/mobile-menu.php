<?php

/**
 * Header section
 */
Kirki::add_section('mobile_menu', array(
    'title'          => esc_attr__('Mobile Menu', 'outbuilt'),
    'priority'       => 20,
    'panel'          => 'header'
));

/**
 * Typography
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'mobile_menu_typography',
    'label'       => esc_attr__('Typography', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '400',
        'font-size'      => '14px',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ),
    'output'       => array(
        array(
            'element' => '.menu-mobile-items a',
            'suffix'  => '!important'
        ),
    ),
));

/**
 * Background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.mobile-navigation',
            'property' => 'background-color',
            'exclude'  => array('#ffffff'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_color',
    'label'       => esc_attr__('Color', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-mobile-items a',
            'property' => 'color',
            'exclude'  => array('#212121'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Color hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_color_hover',
    'label'       => esc_attr__('Color: Hover', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-mobile-items a:hover',
            'property' => 'color',
            'exclude'  => array('#4ab3f4'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Border color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_border',
    'label'       => esc_attr__('Border Color', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => '#eeeeee',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.menu-mobile-items a',
            'property' => 'border-color',
            'exclude'  => array('#eeeeee'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Close toggle background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_toggle_bg',
    'label'       => esc_attr__('Close Toggle Background Color', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => '#ea6262',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.mobile-navigation .menu-mobile',
            'property' => 'background-color',
            'exclude'  => array('#ea6262'),
        ),
    ),
    'transport'   => 'auto',
));

/**
 * Close toggle color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_toggle',
    'label'       => esc_attr__('Close Toggle Color', 'outbuilt'),
    'section'     => 'mobile_menu',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.mobile-navigation .menu-mobile',
            'property' => 'color',
            'exclude'  => array('#ffffff'),
        ),
    ),
    'transport'   => 'auto',
));
