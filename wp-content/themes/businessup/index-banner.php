<?php
/**
 * @package businessup
 */ 
?>
<div class="businessup-breadcrumb-section" style='background: url("<?php echo( has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ) ); ?>") repeat fixed center 0 #143745;'>
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
			     <div class="businessup-breadcrumb-title">
              <?php if( class_exists( 'WooCommerce' ) && is_shop() ) { ?>
              <h1>
              <?php woocommerce_page_title(); ?>
              </h1>
              <?php    
              } else { ?>
              <h1><?php the_title(); ?></h1>
              <?php } ?>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="clearfix"></div>