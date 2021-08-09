<?php
$designexo_testimonial_options = get_theme_mod('designexo_testimonial_content');
$designexo_testimonial_disabled = get_theme_mod('designexo_testimonial_disabled', true); 
$designexo_testimonial_area_title = get_theme_mod('designexo_testimonial_area_title', __('Testimonials','arile-extra'));
if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){
$designexo_testimonial_area_des = get_theme_mod('designexo_testimonial_area_des', __('WHAT OUR CLIENTS SAY ABOUT US','arile-extra'));
}
if('Empresa' == $activate_theme){
$designexo_testimonial_area_des = get_theme_mod('designexo_testimonial_area_des', __('Happy clients say','arile-extra'));
}
$designexo_testimonial_overlay_disable = get_theme_mod('designexo_testimonial_overlay_disable', true); 
if($designexo_testimonial_disabled == true): 
?>
<section class="theme-block theme-testimonial vrsn-two" id="theme-testimonial">	

	<?php if($designexo_testimonial_overlay_disable == true) {?>
    <div class="theme-testimonial-overlay"></div>
	<?php } ?>
	
	<div class="container">	
	     <?php if($designexo_testimonial_area_title != null || $designexo_testimonial_area_des != null): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($designexo_testimonial_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_testimonial_area_title); ?></p>
					<?php endif; ?>
					<?php if($designexo_testimonial_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_testimonial_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
	    <?php endif; ?>
			<div class="row theme-testimonial-content">
			<?php
			$designexo_testimonial_options = json_decode($designexo_testimonial_options);
			if( $designexo_testimonial_options!='' )
			{
			$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					foreach($designexo_testimonial_options as $testimonial_iteam){ 
							$title = ! empty( $testimonial_iteam->title ) ? $testimonial_iteam->title : '';
							$test_desc = ! empty( $testimonial_iteam->text ) ? $testimonial_iteam->text : '';
							$designation = ! empty( $testimonial_iteam->designation ) ? $testimonial_iteam->designation : '';
					?>
					    <div class="col-lg-4 col-md-6 col-sm-12">
						
						   <?php if('Architect Decor' == $activate_theme){ ?>
						
							<article class="theme-testimonial-block wow animate fadeInUp" data-wow-delay=".3s">
								<?php if($testimonial_iteam->image_url != null): ?>
									<figure class="thumbnail">
										<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-fluid rounded-circle" alt="<?php echo esc_html($title); ?>" >
									</figure>
								<?php endif; ?>	
								<div class="testimonial-content">
									<?php if($test_desc != null): ?>
										<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
									<?php endif; ?>				
									<?php if($title != null): ?>	
										<cite class="name">
										<?php echo esc_html($title); ?>
									    </cite>
									<?php endif; ?>		
									<?php if($designation != null): ?>	
										<span class="position"><?php echo esc_html($designation); ?></span>
									<?php endif; ?>		
								</div>
							</article>	
							
						   <?php } else { ?>
						   
						   	<article class="theme-testimonial-block vrsn-two wow animate fadeInUp" data-wow-delay=".3s">
								<div class="testimonial-content vrsn-two">
									<?php if($test_desc != null): ?>
										<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
									<?php endif; ?>			
								</div>	
								<div class="media">
									<?php if($testimonial_iteam->image_url != null): ?>
										<figure class="thumbnail">
											<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-fluid rounded-circle" alt="<?php echo esc_html($title); ?>" >
										</figure>
									<?php endif; ?>							
										<div class="media-body align-self-center">								
											<?php if($title != null): ?>	
												<cite class="name">
													<?php echo esc_html($title); ?>
												</cite>
											<?php endif; ?>		
											<?php if($designation != null): ?>	
												<span class="position"><?php echo esc_html($designation); ?></span>
											<?php endif; ?>
										</div>
		                        </div>
							</article>
						   <?php } ?>
							
					    </div>
					<?php } } else 
					{ if('Architect Decor' == $activate_theme){ ?> 	
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block wow animate fadeInUp" data-wow-delay=".3s">
						        <figure class="thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-user1.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
							    </figure>
								<div class="testimonial-content">
									<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
									<cite class="name"><?php esc_html_e('Olivia Kevinson','arile-extra'); ?></cite>
								    <span class="position"><?php esc_html_e('Founder','arile-extra'); ?></span>
								</div>
						</article>	
					</div>
				    <div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block wow animate fadeInUp" data-wow-delay=".3s">
								<figure class="thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-user2.jpg" class="img-fluid rounded-circle" alt="Mitchell Harris">
								</figure>
								<div class="testimonial-content">
									<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>	<cite class="name"><?php esc_html_e('Mitchell Harris','arile-extra'); ?></cite>
								    <span class="position"><?php esc_html_e('Financer','arile-extra'); ?></span>
								</div>
						</article>	
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block wow animate fadeInUp" data-wow-delay=".3s">
						        <figure class="thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-user3.jpg" class="img-fluid rounded-circle" alt="Julia Cloe">
								</figure>	
								<div class="testimonial-content">
									<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>	<cite class="name"><?php esc_html_e('Julia Cloe','arile-extra'); ?></cite>
								    <span class="position"><?php esc_html_e('Designer','arile-extra'); ?></span>
								</div>
						</article>	
					</div>
					<?php } else { ?>
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block vrsn-two wow animate fadeInUp" data-wow-delay=".3s">
								<div class="testimonial-content vrsn-two">
									<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								</div>
								<div class="media">
									<figure class="thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-user1.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
									</figure>						
									<div class="media-body align-self-center">								
										<cite class="name"><?php esc_html_e('Olivia Kevinson','arile-extra'); ?></cite>
								        <span class="position"><?php esc_html_e('Founder','arile-extra'); ?></span>
									</div>
		                        </div>
						</article>	
					</div>
				    <div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block vrsn-two wow animate fadeInUp" data-wow-delay=".3s">
								<div class="testimonial-content vrsn-two">
									<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								</div>
								<div class="media">
									<figure class="thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-user2.jpg" class="img-fluid rounded-circle" alt="Mitchell Harris">
									</figure>						
									<div class="media-body align-self-center">								
										<cite class="name"><?php esc_html_e('Mitchell Harris','arile-extra'); ?></cite>
								        <span class="position"><?php esc_html_e('Financer','arile-extra'); ?></span>
									</div>
		                        </div>
						</article>	
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block vrsn-two wow animate fadeInUp" data-wow-delay=".3s">
								<div class="testimonial-content vrsn-two">
									<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								</div>
								<div class="media">
									<figure class="thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-user3.jpg" class="img-fluid rounded-circle" alt="Julia Cloe">
									</figure>						
									<div class="media-body align-self-center">								
										<cite class="name"><?php esc_html_e('Julia Cloe','arile-extra'); ?></cite>
								        <span class="position"><?php esc_html_e('Designer','arile-extra'); ?></span>
									</div>
		                        </div>
						</article>	
					</div>
					
					<?php } ?> 
					
		        <?php } ?>
		    </div>
	</div>		
</section>
<?php endif; ?>