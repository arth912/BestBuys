<?php

/**
 * Demo importer custom function
 * We use https://wordpress.org/plugins/one-click-demo-import/ to import our demo content
 */

// Disable branding.
add_filter('pt-ocdi/disable_pt_branding', '__return_true');

/**
 * Define demo file
 */
function outbuilt_import_files() {
    return array(
        array(
            'import_file_name'             => 'Gym',
            'local_import_file'            => get_template_directory() . '/inc/demo/gym/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/gym/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/gym/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/gym/gym.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/gym/',
        ),
        array(
            'import_file_name'             => 'Hair Salon',
            'local_import_file'            => get_template_directory() . '/inc/demo/salon/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/salon/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/salon/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/salon/salon.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/hair-salon/',
        ),
        array(
            'import_file_name'             => 'Political',
            'local_import_file'            => get_template_directory() . '/inc/demo/political/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/political/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/political/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/political/political.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/political/',
        ),
        array(
            'import_file_name'             => 'Furniture',
            'local_import_file'            => get_template_directory() . '/inc/demo/furniture/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/furniture/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/furniture/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/furniture/furniture.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/furniture/',
        ),
        array(
            'import_file_name'             => 'Jewelry',
            'local_import_file'            => get_template_directory() . '/inc/demo/jewelry/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/jewelry/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/jewelry/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/jewelry/jewelry.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/jewelry/',
        ),
        array(
            'import_file_name'             => 'Travel',
            'local_import_file'            => get_template_directory() . '/inc/demo/travel/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/travel/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/travel/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/travel/travel.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/travel/',
        ),
        array(
            'import_file_name'             => 'Interior',
            'local_import_file'            => get_template_directory() . '/inc/demo/interior/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/interior/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/interior/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/interior/interior.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/interior/',
        )
    );
}
add_filter('pt-ocdi/import_files', 'outbuilt_import_files');

/**
 * After import function
 */
function outbuilt_after_import_setup() {

    // Assign menus to their locations.
    $primary = get_term_by('name', 'Main', 'nav_menu');
    $social  = get_term_by('name', 'Social', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'menu-1' => $primary->term_id,
        'mobile' => $primary->term_id,
        'social' => $social->term_id,
    ));

    // Assign front page.
    $front_page_id = get_page_by_title('Home');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
}
add_action('pt-ocdi/after_import', 'outbuilt_after_import_setup');
