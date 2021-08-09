<?php

/**
 * Copyrights
 */
Kirki::add_section('copyrights', array(
    'title'          => esc_attr__('Copyrights', 'outbuilt'),
    'priority'       => 5,
    'panel'          => 'footer'
));

/**
 * Enable copyright area
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'toggle',
    'settings'    => 'copyrights_enable',
    'label'       => esc_attr__('Enable copyright', 'outbuilt'),
    'description' => esc_attr__('Show footer text area.', 'outbuilt'),
    'section'     => 'copyrights',
    'default'     => '1'
));

/**
 * Footer text
 */
Kirki::add_field('outbuilt_options', array(
    'type'     => 'textarea',
    'settings' => 'copyrights_text',
    'label'    => esc_attr__('Text', 'outbuilt'),
    'section'  => 'copyrights',
    'default'  => '&copy; Copyright ' . date('Y') . ' <a href="' . esc_url(home_url()) . '">' . esc_attr(get_bloginfo('name')) . '</a> &middot; Designed and Developed by <a href="http://www.theme-junkie.com/">Theme Junkie</a>',
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element' => '.copyright',
            'function' => 'html'
        )
    ),
    'required'    => array(
        array(
            'setting'  => 'copyrights_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Background color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'copyrights_bg',
    'label'       => esc_attr__('Background Color', 'outbuilt'),
    'section'     => 'copyrights',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.footer-text',
            'property' => 'background-color',
            'exclude'  => array('#ffffff')
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'copyrights_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'copyrights_color',
    'label'       => esc_attr__('Color', 'outbuilt'),
    'section'     => 'copyrights',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.footer-text',
            'property' => 'color',
            'exclude'  => array('#212121')
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'copyrights_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Link Color
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'copyrights_color_link',
    'label'       => esc_attr__('Color: Link', 'outbuilt'),
    'section'     => 'copyrights',
    'default'     => '#4ab3f4',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.footer-text a',
            'property' => 'color',
            'exclude'  => array('#4ab3f4')
        ),
        array(
            'element'  => '.footer-text a:visited',
            'property' => 'color',
            'exclude'  => array('#4ab3f4')
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'copyrights_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Link Color: Hover
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'color',
    'settings'    => 'copyrights_color_hover',
    'label'       => esc_attr__('Color: Hover', 'outbuilt'),
    'section'     => 'copyrights',
    'default'     => '#212121',
    'choices'     => array(
        'alpha' => true,
    ),
    'output'      => array(
        array(
            'element'  => '.footer-text a:hover',
            'property' => 'color',
            'exclude'  => array('#212121')
        ),
    ),
    'transport'   => 'auto',
    'required'    => array(
        array(
            'setting'  => 'copyrights_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));

/**
 * Typography
 */
Kirki::add_field('outbuilt_options', array(
    'type'        => 'typography',
    'settings'    => 'copyrights_typography',
    'label'       => esc_attr__('Typography', 'outbuilt'),
    'section'     => 'copyrights',
    'default'     => array(
        'font-family'    => 'Rubik',
        'variant'        => 'regular',
        'font-size'      => '12px',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ),
    'output'       => array(
        array(
            'element'  => '.copyright'
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'copyrights_enable',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
));
