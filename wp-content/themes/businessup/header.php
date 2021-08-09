<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package businessup
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"></a>
<div class="wrapper">
<header class="businessup-headwidget"> 
  <!--==================== TOP BAR ====================-->
  <?php 
  $businessup_topbar_enable = get_theme_mod('businessup_topbar_enable','true');
  if($businessup_topbar_enable !='false'){
  ?>
  <div class="businessup-head-detail d-none d-md-block">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6">
         <ul class="info-left">
            <?php 
              $businessup_head_info_one = get_theme_mod('businessup_head_info_one');
              $businessup_head_info_two = get_theme_mod('businessup_head_info_two');
            ?>
            <li><?php echo html_entity_decode($businessup_head_info_one); ?></li>
            <li><?php echo html_entity_decode($businessup_head_info_two); ?></li>
          </ul>
        </div>
        <div class="col-md-6 col-xs-12">
      
          <?php 
				  $businessup_header_widget_four_label = get_theme_mod('businessup_header_widget_four_label'); 
                  $businessup_header_widget_four_link = get_theme_mod('businessup_header_widget_four_link');
                  $businessup_header_widget_four_target = get_theme_mod('businessup_header_widget_four_target'); 
				  if( !empty($businessup_header_widget_four_label) ):?>
                      <a href="<?php echo esc_url($businessup_header_widget_four_link); ?>" <?php if( $businessup_header_widget_four_target ==true) { echo "target='_blank'"; } ?> class="btn btn-theme quote"><?php echo esc_html($businessup_header_widget_four_label); ?></a> 
                  <?php endif; ?>


          </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="clearfix"></div>
  <div class="businessup-nav-widget-area">
      <div class="container">
      <div class="row align-items-center">
          <div class="col-md-3 col-sm-4 text-center-xs">
			<div class="navbar-header">
			<?php the_custom_logo(); ?>
            
			<?php  if ( display_header_text() ) : ?>
			<div class="site-branding-text">
				<h1 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"?><?php bloginfo('name'); ?></a></h1>
				<p class="site-description"><?php bloginfo('description'); ?></p>
			</div>
			<?php endif; ?>
			</div>
		</div>
          <div class="col-md-9 col-sm-8 d-none d-lg-block">
            <div class="header-widget row">
              <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                <div class="businessup-header-box wow animated flipInX">
                  <div class="businessup-header-box-icon header-info-one">
                    <?php $businessup_header_widget_one_icon = get_theme_mod('businessup_header_widget_one_icon');
                    if( !empty($businessup_header_widget_one_icon) ):
                      echo '<i class="fa '.esc_attr($businessup_header_widget_one_icon).'">'.'</i>';
                    endif; ?>
                   </div>
                  <div class="businessup-header-box-info">
                    <?php $businessup_header_widget_one_title = get_theme_mod('businessup_header_widget_one_title'); 
                    if( !empty($businessup_header_widget_one_title) ):
                      echo '<h4>'.esc_attr($businessup_header_widget_one_title).'</h4>';
                    endif; ?>
                    <?php $businessup_header_widget_one_description = get_theme_mod('businessup_header_widget_one_description');
                    if( !empty($businessup_header_widget_one_description) ):
                      echo '<p>'.esc_attr($businessup_header_widget_one_description).'</p>';
                    endif; ?> 
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
                <div class="businessup-header-box">
                  <div class="businessup-header-box-icon header-info-two">
                    <?php $businessup_header_widget_two_icon = get_theme_mod('businessup_header_widget_two_icon');
                    if( !empty($businessup_header_widget_two_icon) ):
                      echo '<i class="fa '.esc_attr($businessup_header_widget_two_icon).'">'.'</i>';
                    endif; ?>
                   </div>
                  <div class="businessup-header-box-info">
                    <?php $businessup_header_widget_two_title = get_theme_mod('businessup_header_widget_two_title');
                    if( !empty($businessup_header_widget_two_title) ):
                      echo '<h4>'.esc_attr($businessup_header_widget_two_title).'</h4>';
                    endif; ?>
                    <?php $businessup_header_widget_two_description = get_theme_mod('businessup_header_widget_two_description');
                    if( !empty($businessup_header_widget_two_description) ):
                      echo '<p>'.esc_attr($businessup_header_widget_two_description).'</p>';
                    endif; ?> 
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6 hidden-sm hidden-xs">
                <div class="businessup-header-box">
                  <div class="businessup-header-box-icon header-info-three">
                    <?php $businessup_header_widget_three_icon = get_theme_mod('businessup_header_widget_three_icon');
                    if( !empty($businessup_header_widget_three_icon) ):
                      echo '<i class="fa '.esc_attr($businessup_header_widget_three_icon).'">'.'</i>';
                    endif; ?>
                   </div>
                  <div class="businessup-header-box-info">
                    <?php $businessup_header_widget_three_title = get_theme_mod('businessup_header_widget_three_title'); 
                    if( !empty($businessup_header_widget_three_title) ):
                      echo '<h4>'.esc_attr($businessup_header_widget_three_title).'</h4>';
                    endif; ?>
                    <?php $businessup_header_widget_three_description = get_theme_mod('businessup_header_widget_three_description');
                    if( !empty($businessup_header_widget_three_description) ):
                      echo '<p>'.esc_attr($businessup_header_widget_three_description).'</p>';
                    endif; ?> 
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12 hidden-sm hidden-xs">
                <div class="businessup-header-box wow animated flipInX text-right"> 
                  <?php if ( has_nav_menu( 'social' ) ) : ?>
          <nav class="businessup-social-navigation" role="navigation">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'social',
                'menu_class'     => 'social-links-menu info-right',
                'depth'          => 1,
                'link_before'    => '<span class="screen-reader-text">',
                'link_after'     => '</span>' . businessup_include_svg_icons( array( 'icon' => 'chain' ) ),
              ) );
            ?>
          </nav><!-- .social-navigation -->
          <?php endif; ?>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div></div>

     
    <div class="businessup-menu-full">
      <nav class="navbar navbar-expand-lg navbar-wp">
         <div class="container"> <!-- navbar-toggle -->
          <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-wp">
                  <span class="fa fa-bars"></i></span>
                </button>
          <!-- /navbar-toggle --> 
          <!-- Navigation -->
          
          <div class="collapse navbar-collapse" id="navbar-wp">
            <?php wp_nav_menu( array(  
				    'theme_location' => 'primary', 'container'  => '', 'menu_class' => 'nav navbar-nav','fallback_cb' => 'businessup_fallback_page_menu','walker' => new businessup_nav_walker()
				     ) );
		      	?>
          </div>

          <!-- /Navigation --> </div>
      </nav>
      
  </div>
</header>
<!-- #masthead --> 