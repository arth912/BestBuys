<?php

/**
 * Blog panel
 */
Kirki::add_panel('blog', array(
    'title'          => esc_attr__('Blog', 'outbuilt'),
    'description'    => esc_attr__('Customize the blog area of the theme.', 'outbuilt'),
    'priority'       => 145,
));

/**
 * Blog index section
 */
Kirki::add_section('blog_index', array(
    'title'          => esc_attr__('Blog Layout', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'blog'
));

/**
 * Blog layout
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio-image',
    'settings'    => 'blog_layout',
    'label'       => esc_attr__('Layout', 'outbuilt'),
    'section'     => 'blog_index',
    'default'     => 'right-sidebar',
    'choices'     => array(
        'right-sidebar'     => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/rs.png',
        'left-sidebar'      => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/ls.png',
        'full-width'        => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fw.png',
        'full-width-narrow' => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fwn.png',
    ),
));

/**
 * Blog posts style
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'select',
    'settings'    => 'blog_style',
    'label'       => esc_attr__('Posts Style', 'outbuilt'),
    'section'     => 'blog_index',
    'default'     => 'list',
    'multiple'    => 1,
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
    'settings'    => 'blog_grid_columns',
    'label'       => esc_attr__('Grid Columns', 'outbuilt'),
    'section'     => 'blog_index',
    'default'     => 'two-columns',
    'choices'     => array(
        'two-columns'   => esc_attr__('Two Columns', 'outbuilt'),
        'three-columns' => esc_attr__('Three Columns', 'outbuilt'),
    ),
    'required'    => array(
        array(
            'setting'  => 'blog_layout',
            'operator' => '==',
            'value'    => 'full-width',
        ),
        array(
            'setting'  => 'blog_style',
            'operator' => '==',
            'value'    => 'grid',
        ),
    ),
));

/**
 * Excerpt length
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'excerpt',
    'label'       => esc_attr__('Excerpt Length', 'outbuilt'),
    'description' => esc_attr__('Control the blog excerpt length.', 'outbuilt'),
    'section'     => 'blog_index',
    'default'     => '20',
    'choices'      => array(
        'min'  => 20,
        'max'  => 100,
        'step' => 1,
    ),
));

/**
 * Pagination
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio',
    'settings'    => 'posts_pagination',
    'label'       => esc_attr__('Pagination', 'outbuilt'),
    'description' => esc_attr__('Pagination for blog & archives page.', 'outbuilt'),
    'section'     => 'blog_index',
    'default'     => 'number',
    'choices'     => array(
        'number'      => esc_attr__('Number', 'outbuilt'),
        'traditional' => esc_attr__('Next / Previous', 'outbuilt'),
    ),
));
