<?php
$arilewp_project_content  = get_theme_mod( 'arilewp_project_content');
$arilewp_project_disabled = get_theme_mod('arilewp_project_disabled', true); 
$arilewp_project_front_container_size = get_theme_mod('arilewp_project_front_container_size', 'container-full');
$arilewp_project_area_title = get_theme_mod('arilewp_project_area_title', __('Our Portfolio','arile-extra'));
$arilewp_project_area_des = get_theme_mod('arilewp_project_area_des', __('<b>Recent</b> Projects','arile-extra'));
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($arilewp_project_disabled == true): ?>
	<section class="theme-block theme-project <?php if($activate_theme == 'Business Street') { echo 'theme-bg-dark'; } else { echo 'theme-bg-grey';} ?>" id="theme-project">
	    <?php if($arilewp_project_area_title != null || $arilewp_project_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_project_area_title != null): ?>
						<p class="theme-section-subtitle <?php if($activate_theme == 'Business Street') { echo 'text-light'; } ?>"><?php echo wp_kses_post($arilewp_project_area_title); ?></p>
					<?php endif; ?>
					<?php if($arilewp_project_area_des != null): ?>
						<h2 class="theme-section-title <?php if($activate_theme == 'Business Street') { echo 'text-light'; } ?>"><?php echo wp_kses_post($arilewp_project_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
		<div class="<?php echo esc_html($arilewp_project_front_container_size); ?>">
			<div class="row theme-project-row">		
				<?php 
				if ( ! empty( $arilewp_project_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					$arilewp_project_content = json_decode($arilewp_project_content);
						foreach ( $arilewp_project_content as $project_item ) {
						$image_url = ! empty( $project_item->image_url ) ? $project_item->image_url : '';
						$title = ! empty( $project_item->title ) ? $project_item->title : '';
						$text = ! empty( $project_item->text ) ? $project_item->text : '';
						?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content border-0 project-one">
								<?php if ( ! empty( $image_url ) ) :?>
									<figure class="portfolio-thumbnail">
										<img src="<?php echo esc_url( $image_url ); ?>" class="img-fluid" alt="<?php echo esc_html( $title ); ?>">
									</figure>
								<?php endif; ?>	
								<?php if ( ! empty( $title ) || ! empty( $text ) ) :?>
									<span class="content-area">
									<?php if ( ! empty( $title ) ) :?>
										<h5 class="theme-project-title"><?php echo esc_html( $title ); ?></h5>
									<?php endif; ?>
									<?php if ( ! empty( $text ) ) :?>					
										<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
									<?php endif; ?>
									</span>
								<?php endif; ?>
								</article>
							</div>
				<?php } } else { 
				
			if('InteriorPress' == $activate_theme){					
			    $project1_title = 'RESIDENTIAL DESIGN';
				$project2_title = 'COMMERCIAL DESIGN';
				$project3_title = 'HOUSING PROJECT';
				$project4_title = 'GLASS ART IN LONDON';
				$project1_image = 5;
				$project2_image = 6;
				$project3_image = 7;
				$project4_image = 8;				
		    }elseif('Architect Design' == $activate_theme){					
			    $project1_title = 'SOUTH AFRICA HOUSE';
				$project2_title = 'LIVING ROOM';
				$project3_title = 'PENTHOUSE MIAMI';
				$project4_title = 'MODULAR KITCHEN';
				$project1_image = 9;
				$project2_image = 10;
				$project3_image = 11;
				$project4_image = 12;				
		    }
			else{
				$project1_title = 'Business Resource';
				$project2_title = 'Business Consulting';
				$project3_title = 'App Development';
                $project4_title = 'Marketing Strategy';	
				$project1_image = 1;
				$project2_image = 2;
				$project3_image = 3;
				$project4_image = 4;				
			}
				
				?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content border-0 project-one">
									<figure class="portfolio-thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project<?php echo $project1_image; ?>.jpg" class="img-fluid" alt="Business Resource">
									</figure>
									<span class="content-area">
									<h5 class="theme-project-title"><?php esc_html_e(''.$project1_title.'','arile-extra'); ?></h5>
									<p><?php esc_html_e('Business Solutions','arile-extra'); ?></p>
									</span>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content border-0 project-two">
									<figure class="portfolio-thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project<?php echo $project2_image; ?>.jpg" class="img-fluid" alt="Business Consulting">
									</figure>
									<span class="content-area">
									<h5 class="theme-project-title"><?php esc_html_e(''.$project2_title.'','arile-extra'); ?></h5>
									<p><?php esc_html_e('Consultant','arile-extra'); ?></p>
									</span>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content border-0 project-three">
									<figure class="portfolio-thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project<?php echo $project3_image; ?>.jpg" class="img-fluid" alt="App Development">
									</figure>
									<span class="content-area">
									<h5 class="theme-project-title"><?php esc_html_e(''.$project3_title.'','arile-extra'); ?></h5>
									<p><?php esc_html_e('Online Store','arile-extra'); ?></p>
									</span>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content border-0 project-four">
									<figure class="portfolio-thumbnail">
									<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project<?php echo $project4_image; ?>.jpg" class="img-fluid" alt="Marketing Strategy">
									</figure>
									<span class="content-area">
									<h5 class="theme-project-title"><?php esc_html_e(''.$project4_title.'','arile-extra'); ?></h5>
									<p><?php esc_html_e('Digital Marketing','arile-extra'); ?></p>
									</span>
								</article>
							</div>
					<?php } ?>
			</div>
		</div>
</section>
<?php endif; ?>