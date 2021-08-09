<?php 
$arilewp_blog_disabled = get_theme_mod('arilewp_blog_disabled', true); 
$arilewp_blog_area_title = get_theme_mod('arilewp_blog_area_title', __('Recent Updates','arile-extra'));
$arilewp_blog_area_des = get_theme_mod('arilewp_blog_area_des', __('<b>Our Latest</b> News','arile-extra'));
$arilewp_home_blog_meta_disabled = get_theme_mod('arilewp_home_blog_meta_disabled', true);
$arilewp_blog_front_container_size = get_theme_mod('arilewp_blog_front_container_size', 'container-full');
$arilewp_theme_blog_category = get_theme_mod('arilewp_theme_blog_category');
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($arilewp_blog_disabled == true): ?>
	<section class="theme-block theme-blog <?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress') { echo 'list-view-news'; } ?>" id="theme-blog">
	 <?php if($arilewp_blog_area_title != null || $arilewp_blog_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($arilewp_blog_area_title != null): ?>
						<p class="theme-section-subtitle"><?php echo wp_kses_post($arilewp_blog_area_title); ?></p>
					<?php endif; ?>
					<?php if($arilewp_blog_area_des != null): ?>
						<h2 class="theme-section-title"><?php echo wp_kses_post($arilewp_blog_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>						
			</div>
		</div>
		<?php endif; ?>
		<div class="<?php echo esc_html($arilewp_blog_front_container_size); ?>">
			<div class="row">
        <?php
        $post_args = array( 'post_type' => 'post', 'category__in' => $arilewp_theme_blog_category, 'post__not_in'=>get_option("sticky_posts")) ;
			query_posts( $post_args );
			if(query_posts( $post_args ))
			{	
				while(have_posts()):the_post();
				{ ?>
					<div class="col-lg-<?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress') { echo '6'; } elseif($activate_theme == 'Architect Design' || $activate_theme == 'Ariletech') { echo '4'; } else { echo '3';}   ?> col-md-6 col-sm-12">
						<article class="post <?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress') { echo 'media'; } ?>">
                        <?php if(has_post_thumbnail()): ?>						
							<figure class="post-thumbnail">
							<?php $img_class =array('class' => "img-fluid");?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$img_class);?></a>
							</figure>
						<?php endif; ?>	
							<div class="<?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress') { echo 'media-body'; } ?> post-content">
							<?php if($arilewp_home_blog_meta_disabled == true): ?>
								<div class="entry-meta">
									<?php $category_data = get_the_category_list();
								     if(!empty($category_data)) { ?>
										<span class="cat-links"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
									<?php } ?>
								</div>
							<?php endif; ?>	
								<header class="entry-header">
									<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
								</header>
								
							<?php if($activate_theme == 'Business Street' || $activate_theme == 'InteriorPress') {	?>
							<?php if($arilewp_home_blog_meta_disabled == true): ?>
								<div class="entry-meta">
									<span class="author">
										<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><span class="grey"><?php echo esc_html__('by ','arile-extra');?></span><?php echo esc_html(get_the_author());?></a>	
									</span>
									<span class="posted-on">
									<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
									<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
									</span>
								</div>
								<?php endif; ?>
							<?php } ?>		
								
								<div class="entry-content">	
									<?php the_content(__('Read More','arile-extra')); ?>
								</div>
							</div>				
						</article>
					</div>	
				<?php }  
				endwhile; 
			} ?>
			</div>	
			
		</div>
	</section>
<?php endif; ?>