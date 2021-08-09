<?php

/**
 * Logo section
 */
Kirki::add_section('logo', array(
    'title'          => esc_attr__('Logo', 'outbuilt'),
    'priority'       => 10,
    'panel'          => 'header'
));

Kirki::add_field('outbuilt_options', array(
    'type'        => 'image',
    'settings'    => 'retina_logo',
    'label'       => esc_attr__('Logo Retina', 'outbuilt'),
    'description' => esc_attr__('Select a retina version of your logo.', 'outbuilt'),
    'section'     => 'logo',
    'default'     => '',
    'choices'     => array(
        'save_as' => 'id',
    ),
));
