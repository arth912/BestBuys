<?php 
$designexo_project_content  = get_theme_mod( 'designexo_project_content');
$designexo_project_disabled = get_theme_mod('designexo_project_disabled', true); 
$designexo_project_front_container_size = get_theme_mod('designexo_project_front_container_size', 'container-fluid');
$designexo_project_area_title = get_theme_mod('designexo_project_area_title', __('Our Portfolio','arile-extra'));
if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('ALL INTERIOR DESIGN SOLUTIONS','arile-extra'));
}
if('Empresa' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('Our latest works','arile-extra'));
}
$designexo_project_button_text = get_theme_mod('designexo_project_button_text', __('VIEW ALL PROJECTS','arile-extra'));
$designexo_project_button_link = get_theme_mod('designexo_project_button_link', '#');
if($designexo_project_disabled == true): ?>
	<section class="theme-block theme-project theme-bg-grey pb-0" id="theme-project">
	    <?php if($designexo_project_area_title != null || $designexo_project_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($designexo_project_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_project_area_title); ?></p>
					<?php endif; ?>
						<?php if($designexo_project_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_project_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
		<div class="<?php echo esc_html($designexo_project_front_container_size); ?>">
			<div class="row theme-project-row">		
				<?php 
				if ( ! empty( $designexo_project_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					$designexo_project_content = json_decode($designexo_project_content);
						foreach ( $designexo_project_content as $project_item ) {
						$image_url = ! empty( $project_item->image_url ) ? $project_item->image_url : '';
						$title = ! empty( $project_item->title ) ? $project_item->title : '';
						$text = ! empty( $project_item->text ) ? $project_item->text : '';
						?>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
								<?php if ( ! empty( $image_url ) || ! empty( $title ) || ! empty( $text ) ) :?>
									<figure class="portfolio-thumbnail">
										<img src="<?php echo esc_url( $image_url ); ?>" class="img-fluid" alt="<?php echo esc_html( $title ); ?>">
										<div class="content-overlay"></div>
										<div class="click-view">
										<?php if ( ! empty( $title ) ) :?>
											<h5 class="theme-project-title"><?php echo esc_html( $title ); ?></h5>
										<?php endif; ?>
										<?php if ( ! empty( $text ) ) :?>					
											<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
										<?php endif; ?>
										</div>
									</figure>
								<?php endif; ?>
								</article>
							</div>
				<?php } } else { ?>
				        <?php if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ ?>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project1.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('BEDROOM LIGHTING DÉCOR','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project2.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('EXTERIOR RENOVATION','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project3.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('ARCHITECTURE DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
						<?php if('Architect Decor' != $activate_theme){ ?>	
							
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project4.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('MODULAR KITCHEN DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>	
							
						<?php } ?>
			            <?php if('Empresa' == $activate_theme){ ?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project5.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Adventures','arile-extra'); ?></h5>
										<p><?php esc_html_e('Mountain climbing','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project6.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Photography portfolio','arile-extra'); ?></h5>
										<p><?php esc_html_e('Illustration','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project7.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Fashion store','arile-extra'); ?></h5>
										<p><?php esc_html_e('Fashion photography','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project8.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Tour & travels','arile-extra'); ?></h5>
										<p><?php esc_html_e('Entertainment','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>
				
					<?php } ?>
			</div>
		</div>
		<?php if ( ! empty( $designexo_project_button_text ) ) :?>
			<div class="container-fluid pl-0 pr-0 pt-5 pb-5 theme-bg-default">
				<div class="row">
					<div class="col-lg-12">
						<div class="mx-auto theme-text-center wow animate fadeInUp" data-wow-delay=".3s">
							<a href="<?php echo $designexo_project_button_link; ?>" target="_blank" class="btn-small btn-dark"><?php echo $designexo_project_button_text; ?></a>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
</section>
<?php endif; ?>