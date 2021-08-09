<?php

/**
 * Archive section
 */
Kirki::add_section('archive_header', array(
    'title'          => esc_attr__('Archive', 'outbuilt'),
    'priority'       => 30,
    'panel'          => 'header'
));

Kirki::add_field('outbuilt_options', array(
    'type'        => 'image',
    'settings'    => 'archive_header_img',
    'label'       => esc_attr__('Archive Header Background', 'outbuilt'),
    'description' => esc_attr__('This background image will be displayed on all archive pages.', 'outbuilt'),
    'section'     => 'archive_header',
    'default'     => '',
    'choices'     => array(
        'save_as' => 'id',
    ),
));

Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'archive_header_title',
    'label'       => esc_attr__('Title', 'outbuilt'),
    'section'     => 'archive_header',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => '500',
        'font-size'      => '40px',
        'letter-spacing' => '0',
        'color'          => '#ffffff',
        'text-transform' => 'uppercase'
    ),
    'output'       => array(
        array(
            'element'  => '.archive-header .archive-title',
        ),
    ),
));
