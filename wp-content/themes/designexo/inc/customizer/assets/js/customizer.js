/**
 * File customizer.js. 
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function ( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	
	// Service title
	wp.customize(
		'designexo_service_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-services .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Service description
	wp.customize(
		'designexo_service_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-services .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Project title
	wp.customize(
		'designexo_project_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-project .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Project description
	wp.customize(
		'designexo_project_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-project .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
    // Project button text
	wp.customize(
		'designexo_project_button_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-project .mx-auto.theme-text-center' ).text( newval );
				}
			);
		}
	);
	
	// Testimonial title
	wp.customize(
		'designexo_testimonial_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-testimonial .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Testimonial description
	wp.customize(
		'designexo_testimonial_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-testimonial .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Wooshop title
	wp.customize(
		'designexo_wooshop_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.shop .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Wooshop description
	wp.customize(
		'designexo_wooshop_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.shop .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Call to action title
	wp.customize(
		'designexo_cta_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .cta-block h5' ).text( newval );
				}
			);
		}
	);
	
	// Call to action subtitle
	wp.customize(
		'designexo_cta_area_subtitle', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .cta-block h2' ).text( newval );
				}
			);
		}
	);
	
	// Call to action description
	wp.customize(
		'designexo_cta_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .cta-block p' ).text( newval );
				}
			);
		}
	);
	
	// Call to action button text
	wp.customize(
		'designexo_cta_button_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .btn-small' ).text( newval );
				}
			);
		}
	);
	
	// Call to action video text
	wp.customize(
		'designexo_video_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .youtube-click a' ).text( newval );
				}
			);
		}
	);
	
	// Team title
	wp.customize(
		'designexo_team_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.team-mambers .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Team description
	wp.customize(
		'designexo_team_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.team-mambers .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	
	// Blog title
	wp.customize(
		'designexo_blog_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-blog .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Blog description
	wp.customize(
		'designexo_blog_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-blog .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Blog button text
	wp.customize(
		'designexo_show_more_button_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-blog .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	
	// footer copyright text
	wp.customize(
		'designexo_footer_copright_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.site-footer .site-info' ).text( newval );
				}
			);
		}
	);
	
	
} )( jQuery );
