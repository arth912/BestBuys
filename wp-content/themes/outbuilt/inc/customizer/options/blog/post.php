<?php

/**
 * Post section
 */
Kirki::add_section('post', array(
    'title'          => esc_attr__('Single Post', 'outbuilt'),
    'priority'       => 1,
    'panel'          => 'blog'
));

/**
 * Post layout
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'radio-image',
    'settings'    => 'post_layout',
    'label'       => esc_html__('Global Post Layout', 'outbuilt'),
    'description' => esc_html__('Single post layout.', 'outbuilt'),
    'section'     => 'post',
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
    'settings'    => 'post_style',
    'label'       => esc_attr__('Global Posts Style', 'outbuilt'),
    'section'     => 'post',
    'default'     => 'default',
    'choices'     => array(
        'default'                      => esc_attr__('Default', 'outbuilt'),
        'full-width-title'             => esc_attr__('Full Width Title', 'outbuilt'),
        'side-by-side'                 => esc_attr__('Side By Side', 'outbuilt'),
        'full-width-side-by-side'      => esc_attr__('Full Width Side By Side', 'outbuilt'),
        'thumbnail-overlay'            => esc_attr__('Thumbnail Overlay', 'outbuilt'),
        'full-width-thumbnail-overlay' => esc_attr__('Full Width Thumbnail Overlay', 'outbuilt'),
        'thumbnail-on-top'             => esc_attr__('Thumbnail On Top', 'outbuilt'),
        'full-width-thumbnail-on-top'  => esc_attr__('Full Width Thumbnail On Top', 'outbuilt'),
    ),
));

/**
 * Featured image
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'post_featured_image',
    'label'       => esc_attr__('Featured Image', 'outbuilt'),
    'description' => esc_attr__('Enable featured image', 'outbuilt'),
    'section'     => 'post',
    'default'     => '1'
));

/**
 * Meta
 */
// Kirki::add_field( 'outbuilt_options', array(
// 	'type'        => 'toggle',
// 	'settings'    => 'post_meta',
// 	'label'       => esc_attr__( 'Post Meta', 'outbuilt' ),
// 	'description' => esc_attr__( 'Enable post meta', 'outbuilt' ),
// 	'section'     => 'post',
// 	'default'     => '1'
// ) );

/**
 * Tags
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'post_tags',
    'label'       => esc_attr__('Post Tags', 'outbuilt'),
    'description' => esc_attr__('Enable post tags', 'outbuilt'),
    'section'     => 'post',
    'default'     => '1'
));

/**
 * Tags title
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'text',
    'settings' => 'post_tags_title',
    'label'    => esc_attr__('Tags Title', 'outbuilt'),
    'section'  => 'post',
    'default'  => esc_attr__('Topics', 'outbuilt'),
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element' => '.tag-title',
            'function' => 'html'
        )
    ),
    'required'    => array(
        array(
            'setting'  => 'post_tags',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));

/**
 * Post navigation
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'post_navigation',
    'label'       => esc_attr__('Post Navigation', 'outbuilt'),
    'description' => esc_attr__('Enable next & prev post', 'outbuilt'),
    'section'     => 'post',
    'default'     => '1'
));

/**
 * Post author box
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'post_author_box',
    'label'       => esc_attr__('Post Author', 'outbuilt'),
    'description' => esc_attr__('Enable post author box', 'outbuilt'),
    'section'     => 'post',
    'default'     => '1'
));

/**
 * Post related
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'post_related',
    'label'       => esc_attr__('Related Posts', 'outbuilt'),
    'description' => esc_attr__('Enable related posts', 'outbuilt'),
    'section'     => 'post',
    'default'     => '1'
));

/**
 * Post related title
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'text',
    'settings' => 'post_related_title',
    'label'    => esc_attr__('Related Title', 'outbuilt'),
    'section'  => 'post',
    'default'  => esc_attr__('You Might Also Like:', 'outbuilt'),
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element' => '.related-title',
            'function' => 'html'
        )
    ),
    'required'    => array(
        array(
            'setting'  => 'post_related',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));

/**
 * Post related number
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'slider',
    'settings'    => 'post_related_number',
    'label'       => esc_attr__('Related Number', 'outbuilt'),
    'description' => esc_attr__('The number of related posts', 'outbuilt'),
    'section'     => 'post',
    'default'     => '3',
    'choices'      => array(
        'min'  => 3,
        'max'  => 9,
        'step' => 1,
    ),
    'required'    => array(
        array(
            'setting'  => 'post_related',
            'operator' => '==',
            'value'    => true,
        ),
    ),
));

/**
 * Post comment
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'post_comment',
    'label'       => esc_attr__('Post Comment', 'outbuilt'),
    'description' => esc_attr__('Enable post comment', 'outbuilt'),
    'section'     => 'post',
    'default'     => '1'
));
