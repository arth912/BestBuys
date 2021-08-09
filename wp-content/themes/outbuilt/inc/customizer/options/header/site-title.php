<?php

/**
 * Site title section
 */
Kirki::add_section('site_title', array(
    'title'          => esc_attr__('Site Title', 'outbuilt'),
    'priority'       => 5,
    'panel'          => 'header'
));

/**
 * Site title
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'site_title_typography',
    'label'       => esc_attr__('Site Title', 'outbuilt'),
    'section'     => 'site_title',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'font-size'      => '30px',
        'letter-spacing' => '0',
        'color'          => '#212121',
        'text-transform' => 'uppercase'
    ),
    'output'       => array(
        array(
            'element'  => '.site-title a',
            'suffix'   => '!important'
        ),
    ),
));
