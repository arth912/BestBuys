<?php
$arilewp_testimonial_options = get_theme_mod('arilewp_testimonial_content');
$arilewp_testimonial_disabled = get_theme_mod('arilewp_testimonial_disabled', true); 
$arilewp_testimonial_area_title = get_theme_mod('arilewp_testimonial_area_title', __('Testimonials','arile-extra'));
$arilewp_testimonial_area_des = get_theme_mod('arilewp_testimonial_area_des', __('<b>What clients</b>  are say','arile-extra'));
$arilewp_testimonial_overlay_disable = get_theme_mod('arilewp_testimonial_overlay_disable', false); 
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($arilewp_testimonial_disabled == true): 
?>
<section class="theme-block theme-testimonial <?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress' || $activate_theme == 'Ariletech') { echo 'vrsn-two theme-bg-default'; } ?>" id="theme-testimonial">

<?php if($activate_theme != 'Business Street' && $activate_theme != 'Ariletech') {?>

	<?php if($arilewp_testimonial_overlay_disable == true) {?>
		<div class="overlay"></div>
	<?php } ?>	
	
<?php } ?>
	
	<div class="container">	
	
	     <?php if($arilewp_testimonial_area_title != null || $arilewp_testimonial_area_des != null): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_testimonial_area_title != null): ?>
						<p class="theme-section-subtitle  <?php if($activate_theme == 'Business Street' || $activate_theme == 'StrangerWP' || $activate_theme == 'InteriorPress' || $activate_theme == 'Ariletech') { echo 'text-light'; } ?>"><?php echo wp_kses_post($arilewp_testimonial_area_title); ?></p>
					<?php endif; ?>
					<?php if($arilewp_testimonial_area_des != null): ?>
						<h2 class="theme-section-title <?php if($activate_theme == 'Business Street' || $activate_theme == 'StrangerWP' || $activate_theme == 'InteriorPress' || $activate_theme == 'Ariletech') { echo 'text-light'; } ?>"><?php echo wp_kses_post($arilewp_testimonial_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full <?php if($activate_theme == 'Business Street' || $activate_theme == 'Ariletech') { echo 'theme-bg-light'; } ?>"></div>
					</div>
				</div>
			</div>
	    <?php endif; ?>
			<div class="row theme-testimonial-content">
			<?php
			$arilewp_testimonial_options = json_decode($arilewp_testimonial_options);
			if( $arilewp_testimonial_options!='' )
			{
			$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					foreach($arilewp_testimonial_options as $testimonial_iteam){ 
							$title = ! empty( $testimonial_iteam->title ) ? $testimonial_iteam->title : '';
							$test_desc = ! empty( $testimonial_iteam->text ) ? $testimonial_iteam->text : '';
							$designation = ! empty( $testimonial_iteam->designation ) ? $testimonial_iteam->designation : '';
					?>
					    <div class="col-lg-4 col-md-6 col-sm-12">
						
						<?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress' || $activate_theme == 'Ariletech') {?>
						
							<article class="theme-testimonial-block vrsn-two">
								<div class="testimonial-content vrsn-two">
									<?php if($test_desc != null): ?>
										<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
									<?php endif; ?>	
								</div>
								<div class="media">
									<?php if($testimonial_iteam->image_url != null): ?>
										<figure class="thumbnail">
											<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-fluid rounded-circle" alt="<?php echo $title; ?>" >
										</figure>
									<?php endif; ?>	
									<div class="media-body align-self-center">
										<?php if($title != null): ?>	
											<cite class="name">										
												<?php echo $title; ?>  
											</cite>
										<?php endif; ?>		
										<?php if($designation != null): ?>	
											<span class="position"><?php echo $designation; ?></span>
										<?php endif; ?>	
									</div>
								</div>
							</article>
						
						
						<?php } else {?>	

							<article class="theme-testimonial-block">
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

                           						
						<?php } ?>	
							
					    </div>
					<?php } } else 
					{ ?>
							
				<?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress' || $activate_theme == 'Ariletech') {?>
	
					<div class="col-lg-4 col-md-6 col-sm-12">		
					    <article class="theme-testimonial-block vrsn-two">								
							<div class="testimonial-content vrsn-two">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arile-extra'); ?></p>
							</div>	
							<div class="media">
								<figure class="thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-user1.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Olivia Kevinson'; ?>">
								</figure>
								<div class="media-body align-self-center">
									<cite class="name"><?php esc_html_e('Olivia Kevinson','arile-extra'); ?></cite>
									<span class="position"><?php esc_html_e('Founder','arile-extra'); ?></span>
								</div>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
		                <article class="theme-testimonial-block vrsn-two">								
							<div class="testimonial-content vrsn-two">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arile-extra'); ?></p>
							</div>	
							<div class="media">
								<figure class="thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-user2.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Mitchell Harris'; ?>">
								</figure>
								<div class="media-body align-self-center">
									<cite class="name"><?php esc_html_e('Mitchell Harris','arile-extra'); ?></cite>
									<span class="position"><?php esc_html_e('Financer','arile-extra'); ?></span>
								</div>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
				        <article class="theme-testimonial-block vrsn-two">								
							<div class="testimonial-content vrsn-two">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"', 'arile-extra'); ?></p>
							</div>	
							<div class="media">
								<figure class="thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-user3.jpg" class="img-fluid rounded-circle" alt="<?php echo 'Julia Cloe'; ?>">
								</figure>
								<div class="media-body align-self-center">
									<cite class="name"><?php esc_html_e('Julia Cloe','arile-extra'); ?></cite>
									<span class="position"><?php esc_html_e('Sales Manager','arile-extra'); ?></span>
								</div>
							</div>
						</article>
					</div>
				<?php } else{ ?>	
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-user1.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Olivia Kevinson','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Founder','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-user2.jpg" class="img-fluid rounded-circle" alt="Mitchell Harris">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Mitchell Harris','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Financer','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-user3.jpg" class="img-fluid rounded-circle" alt="Julia Cloe">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Julia Cloe','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Sales Manager','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
					
		         	<?php } } ?>
		    </div>
	</div>		
</section>
<?php endif; ?>