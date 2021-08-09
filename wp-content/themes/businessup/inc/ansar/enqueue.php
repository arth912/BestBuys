<?php function businessup_scripts() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'businessup-style', get_stylesheet_uri() );

	wp_enqueue_style('businessup-default', get_template_directory_uri() . '/css/colors/default.css');
	
	wp_enqueue_style('smartmenus',get_template_directory_uri().'/css/jquery.smartmenus.bootstrap.css');	

	wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css');

	wp_enqueue_style('owl_transitions',get_template_directory_uri().'/css/owl.transitions.css');

	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.css');

	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
	/* Js script */

  wp_enqueue_script( 'businessup-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'));

  wp_enqueue_script('businessup_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

  wp_enqueue_script('businessup_smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js' , array('jquery'));
  
  wp_enqueue_script('businessup_slider', get_template_directory_uri() . '/js/slider.js' , array('jquery'));

  wp_enqueue_script('businessup_smartmenus_bootstrap', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js' , array('jquery'));
  
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'));

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'businessup_scripts');


//Custom Color
function businessup_text_custom_color() {
    
    businessup_custom_color();
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js' , array('jquery'));	
    
}
add_action('wp_footer','businessup_text_custom_color');

/**
 	* Added skip link focus
 	*/
	function businessup_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
	}
	add_action( 'wp_print_footer_scripts', 'businessup_skip_link_focus_fix' );


	function businessup_customizer_selective_preview() {
	wp_enqueue_script(
		'businessup-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array(
			'jquery',
			'customize-preview',
		), 999, true
	);
}

add_action( 'customize_preview_init', 'businessup_customizer_selective_preview' );


add_action('admin_enqueue_scripts', 'businessup_widgets_backend_enqueue');
function businessup_widgets_backend_enqueue(){
    wp_register_script('businessup-custom-widgets', get_template_directory_uri() . '/js/widgets.js', array('jquery'), true);
    $translation = array(
        'btn_text' => esc_html__( 'Processing...', 'businessup' ),
        'nonce'    => wp_create_nonce( 'businessup_demo_import_nonce' ),
        'noncen'    => 'businessup_demo_import_nonce',
        'adminurl'    => admin_url(),
    );
    wp_localize_script( 'businessup-custom-widgets', 'businessup_adi_install', $translation );

    wp_enqueue_media();
    wp_enqueue_script('businessup-custom-widgets');
}



// Update CSS within in Admin
function businessup_admin_style() {
  wp_enqueue_style('businessup-admin-css', get_template_directory_uri() . '/css/businessup-admin.css', array(), '4.5.0');
}
add_action('admin_enqueue_scripts', 'businessup_admin_style');
?>