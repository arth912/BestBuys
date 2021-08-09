<?php

/**
 * Archive section
 */
Kirki::add_section('blog_archive', array(
    'title'          => esc_attr__('Archives', 'outbuilt'),
    'priority'       => 5,
    'panel'          => 'blog'
));

/**
 * Archive layout
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio-image',
    'settings'    => 'archive_layout',
    'label'       => esc_attr__('Archive Layout', 'outbuilt'),
    'description' => esc_attr__('Archive including category, archive, search and tag page layout.', 'outbuilt'),
    'section'     => 'blog_archive',
    'default'     => 'right-sidebar',
    'choices'     => array(
        'right-sidebar'     => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/rs.png',
        'left-sidebar'      => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/ls.png',
        'full-width'        => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fw.png',
        'full-width-narrow' => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fwn.png',
    ),
));

/**
 * Archive posts style
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'select',
    'settings'    => 'archive_style',
    'label'       => esc_attr__('Archive Posts Style', 'outbuilt'),
    'section'     => 'blog_archive',
    'default'     => 'grid',
    'choices'     => array(
        'default'    => esc_attr__('Default', 'outbuilt'),
        'list'       => esc_attr__('List', 'outbuilt'),
        'alternate'  => esc_attr__('Alternate', 'outbuilt'),
        'grid'       => esc_attr__('Grid', 'outbuilt')
    ),
));

/**
 * Grid post style columns
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'select',
    'settings'    => 'archive_grid_columns',
    'label'       => esc_attr__('Grid Columns', 'outbuilt'),
    'section'     => 'blog_archive',
    'default'     => 'two-columns',
    'choices'     => array(
        'two-columns'   => esc_attr__('Two Columns', 'outbuilt'),
        'three-columns' => esc_attr__('Three Columns', 'outbuilt'),
    ),
    'required'    => array(
        array(
            'setting'  => 'archive_layout',
            'operator' => '==',
            'value'    => 'full-width',
        ),
        array(
            'setting'  => 'archive_style',
            'operator' => '==',
            'value'    => 'grid',
        ),
    ),
));
