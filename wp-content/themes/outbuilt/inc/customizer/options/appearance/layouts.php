<?php

/**
 * Page layout section
 */
Kirki::add_section('layout', array(
    'title'          => esc_attr__('Page Layout', 'outbuilt'),
    'priority'       => 10,
    'panel'          => 'appearance'
));

/**
 * Page layout
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio-image',
    'settings'    => 'page_layout',
    'label'       => esc_html__('Page Layout', 'outbuilt'),
    'description' => esc_html__('All pages will affect this settings.', 'outbuilt'),
    'section'     => 'layout',
    'default'     => 'right-sidebar',
    'choices'     => array(
        'right-sidebar'     => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/rs.png',
        'left-sidebar'      => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/ls.png',
        'full-width'        => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fw.png',
        'full-width-narrow' => trailingslashit(get_template_directory_uri()) . 'inc/customizer/assets/img/fwn.png',
    ),
));
