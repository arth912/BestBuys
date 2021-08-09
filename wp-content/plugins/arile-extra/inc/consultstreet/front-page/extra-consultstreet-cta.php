<?php 
if('ConsultStreet' == $activate_theme || 'BrightPress' == $activate_theme || 'AssentPress' == $activate_theme){	   $title = 'Do you have any questions?';
    $description = 'How can we help your business? Because many people love our free consultation for growing their businesses which gives the user complete freedom to set up a business.';
    $button = 'Contact Us';
	$ctaimage = 'theme-cta-bg';
}
if('FitnessBase' == $activate_theme){
    $title = 'FITNESS CLASSES THIS SUMMER.';
    $description = '<h3> PAY NOW AND GET 35% DISCOUNT </h3>';
    $button = 'BECOME A MEMBER';
    $ctaimage = 'theme-cta-bg1';	
}
$consultstreet_cta_disabled = get_theme_mod('consultstreet_cta_disabled', true); 
$consultstreet_cta_area_subtitle = get_theme_mod('consultstreet_cta_area_subtitle', ''.$title.'');
$consultstreet_cta_area_des = get_theme_mod('consultstreet_cta_area_des', ''.$description.'');
$consultstreet_cta_button_text = get_theme_mod('consultstreet_cta_button_text', ''.$button.'');
$consultstreet_cta_button_link = get_theme_mod('consultstreet_cta_button_link', '#');
$consultstreet_cta_background_image = get_theme_mod('consultstreet_cta_background_image', arile_extra_plugin_url . '/inc/consultstreet/images/'.$ctaimage.'.jpg');
if($consultstreet_cta_disabled == true): ?>
	<!--Call to Action Section-->	
	<section class="theme-cta" id="theme-cta" style="background-image:url('<?php echo esc_url($consultstreet_cta_background_image);?>'"); >
		<div class="theme-cta-overlay"></div>
		<div class="container">			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="cta-block text-center">
					<?php if($consultstreet_cta_area_subtitle != null): ?>
						<h2 class="title text-white"><?php echo $consultstreet_cta_area_subtitle; ?></h2>
					<?php endif;  ?>
					<?php if($consultstreet_cta_area_des != null): ?>						
						<p class="text-white"><?php echo $consultstreet_cta_area_des; ?></p>
					<?php endif;  ?>
					<?php if($consultstreet_cta_button_text != null): ?>
						<div class="mx-auto mt-3">
							<a href="<?php echo $consultstreet_cta_button_link; ?>" class="btn-small btn-default"><?php echo $consultstreet_cta_button_text; ?></a>
						</div>
					<?php endif;  ?>
					</div>
				</div>					
			</div>
		</div>
	</section>
	<!--/End of Call to Action Section-->
<?php endif; ?>	