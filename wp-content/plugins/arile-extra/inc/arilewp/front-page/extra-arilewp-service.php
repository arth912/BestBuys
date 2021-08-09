<?php 
$arilewp_service_content  = get_theme_mod( 'arilewp_service_content'); 
$arilewp_service_area_disabled = get_theme_mod('arilewp_service_area_disabled', true); 
$arilewp_service_area_title = get_theme_mod('arilewp_service_area_title', __('Our Services','arile-extra'));
$arilewp_service_area_des = get_theme_mod('arilewp_service_area_des', __('<b>We provide the</b> best services','arile-extra'));
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($arilewp_service_area_disabled == true): ?>
<section class="theme-block theme-services" id="theme-services">
	<div class="container">
	<?php  
	if( ($arilewp_service_area_title) || ($arilewp_service_area_des)!='' ): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_service_area_title != null): ?>
						<p class="theme-section-subtitle"><?php echo wp_kses_post($arilewp_service_area_title); ?></p>
					<?php endif; ?>
					<?php if($arilewp_service_area_des != null): ?>
						<h2 class="theme-section-title"><?php echo wp_kses_post($arilewp_service_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<div class="row theme-services-content">
		<?php
		if ( ! empty( $arilewp_service_content ) ) {
		$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
		$arilewp_service_content = json_decode( $arilewp_service_content );
		foreach ( $arilewp_service_content as $features_item ) {
			$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
			$title = ! empty( $features_item->title ) ? $features_item->title : '';
			$text = ! empty( $features_item->text ) ? $features_item->text : '';
			$link = ! empty( $features_item->link ) ? $features_item->link : '';
			$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
			$open_new_tab = $features_item->open_new_tab;
			?>
			<div class="col-lg-4 col-md-6 col-sm-12">				
		        
					<article class="<?php if($activate_theme != 'Business Street'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
					
					<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
							<?php if ( ! empty( $image ) ) : ?>
							<figure class="service-content-thumbnail<?php if($activate_theme == 'Business Street'){echo '-two';} ?>">
								<?php if ( ! empty( $link ) ) : ?>
									<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
									   <img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
									</a>
								<?php endif; ?>	
								<?php if ( empty( $link ) ) : ?>	
										<img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
                                <?php endif; ?>	
                            </figure>								
							<?php endif; ?>
						<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
							<?php if ( ! empty( $icon ) ) :?>
							<figure class="service-content-thumbnail<?php if($activate_theme == 'Business Street'){echo '-two';} ?>">
									<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a>
									<?php endif; ?>
									<?php if ( empty( $link ) ) : ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
									<?php endif; ?>
							</figure>
							<?php endif; ?>
						<?php } ?>
						
						<?php if($activate_theme == 'Business Street'){echo '<div class="media-body">';} ?>
							<?php if ( ! empty( $title ) ) : 
								if(empty($link)){ ?>
									<h5 class="service-title"><?php echo esc_html( $title ); ?></h5><?php
								}else{
									?>
									<h5 class="service-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
								}
							?>
							<?php endif; ?>
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo wp_kses_post( html_entity_decode( $text ) ); ?></p>
							<?php endif; ?>
							
						<?php if($activate_theme == 'Business Street'){echo '</div>';} ?>
						
					</article>
				
			</div>
			<?php
			} }
			else
			{ 

            if('InteriorPress' == $activate_theme){				
				$service1_title = 'ARCHITECTURAL DESIGN';
				$service2_title = 'INTERIOR DESIGN';
				$service3_title = 'LIGHTING DESIGN';	
		    }elseif('Architect Design' == $activate_theme){				
				$service1_title = 'ARCHITECTURAL DESIGN';
				$service2_title = 'HOUSE DECOR';
				$service3_title = 'PROJECT PLANNING';	
		    }
			else{
                $service1_title = 'Pixel Perfect Design';
				$service2_title = 'WooCommerce Ready';
				$service3_title = 'Satisfied Clients';				
			}

		?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="<?php if($activate_theme != 'Business Street'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
						<figure class="service-content-thumbnail<?php if($activate_theme == 'Business Street'){echo '-two';} ?>">
                        <?php if('InteriorPress' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service1.jpg" alt="Architectural Design" title="Architectural Design"></a>
						<?php } elseif('Architect Design' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service4.jpg" alt="Architectural Design" title="Architectural Design"></a>
						<?php }
						
						else{ ?>
							<a href="#"><i class="fa fa-mobile"></i></a>
					    <?php }	?>	
						</figure>
						<?php if($activate_theme == 'Business Street'){echo '<div class="media-body">';} ?>
						<h5 class="service-title"><a href="#"><?php esc_html_e(''.$service1_title.'','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.','arile-extra'); ?></p>
						<?php if($activate_theme == 'Business Street'){echo '</div>';} ?>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="<?php if($activate_theme != 'Business Street'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
						<figure class="service-content-thumbnail<?php if($activate_theme == 'Business Street'){echo '-two';} ?>">
                        <?php if('InteriorPress' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service2.jpg" alt="Interior Design" title="Interior Design"></a>
						<?php } elseif('Architect Design' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service5.jpg" alt="House Decor" title="House Decor"></a>
						<?php }
						else{ ?>
							<a href="#"><i class="fa fa-opencart"></i></a>
					    <?php }	?>	
						</figure>
					<?php if($activate_theme == 'Business Street'){echo '<div class="media-body">';} ?>
						<h5 class="service-title"><a href="#"><?php esc_html_e(''.$service2_title.'','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.','arile-extra'); ?></p>
					<?php if($activate_theme == 'Business Street'){echo '</div>';} ?>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="<?php if($activate_theme != 'Business Street'){echo 'service-content text-center';}else{echo 'service-content-two media';} ?>">
						<figure class="service-content-thumbnail<?php if($activate_theme == 'Business Street'){echo '-two';} ?>">	
						<?php if('InteriorPress' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service3.jpg" alt="Lighting Design" title="Lighting Design"></a>
						<?php } elseif('Architect Design' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service6.jpg" alt="Project Planning" title="Project Planning"></a>
						<?php }
						else{ ?>
							<a href="#"><i class="fa fa-users"></i></a>
					    <?php }	?>
						</figure>
					<?php if($activate_theme == 'Business Street'){echo '<div class="media-body">';} ?>
						<h5 class="service-title"><a href="#"><?php esc_html_e(''.$service3_title.'','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem ipsum has been dummy.','arile-extra'); ?></p>
					<?php if($activate_theme == 'Business Street'){echo '</div>';} ?>
					</article>
				</div>		
			<?Php	
		    } 
			?>
		</div>
	</div>
</section>
<?php endif; ?>