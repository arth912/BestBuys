<?php

/**
 * Editor's pick section
 */
Kirki::add_section('editors_pick', array(
    'title'          => esc_html__('Editor\'s Pick', 'outbuilt'),
    'description'    => esc_html__('This section will appear at the bottom of your site, all pages. Choose which category to use, then it will automatically display latest 3 posts from it.', 'outbuilt'),
    'priority'       => 10,
    'panel'          => 'blog'
));

/**
 * Tags title
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'text',
    'settings' => 'pick_title',
    'label'    => esc_attr__('Title', 'outbuilt'),
    'section'  => 'editors_pick',
    'default'  => esc_attr__('Editor\'s pick', 'outbuilt'),
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element' => '.pick-posts-title',
            'function' => 'html'
        )
    ),
));

Kirki::add_field('outbuilt_options', array(
    'type'        => 'select',
    'settings'    => 'pick_category',
    'label'       => esc_html__('Choose category', 'outbuilt'),
    'section'     => 'editors_pick',
    'choices'     => Kirki_Helper::get_terms('category'),
));
