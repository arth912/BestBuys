<?php 
$designexo_blog_disabled = get_theme_mod('designexo_blog_disabled', true); 
$designexo_blog_area_title = get_theme_mod('designexo_blog_area_title', __('Recent Updates','arile-extra'));
$designexo_blog_area_des = get_theme_mod('designexo_blog_area_des', __('Our latest news','arile-extra'));
$designexo_home_blog_meta_disabled = get_theme_mod('designexo_home_blog_meta_disabled', true);
$designexo_blog_front_container_size = get_theme_mod('designexo_blog_front_container_size', 'container'); 
$designexo_theme_blog_category = get_theme_mod('designexo_theme_blog_category');
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($designexo_blog_disabled == true): ?>
	<section class="theme-block theme-blog theme-bg-grey" id="theme-blog">
	 <?php if($designexo_blog_area_title != null || $designexo_blog_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					
					<?php if($designexo_blog_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_blog_area_title); ?></p>
					<?php endif; ?>
					
					<?php if($designexo_blog_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_blog_area_des); ?></h2>
					<?php endif; ?>
			
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>						
			</div>
		</div>
		<?php endif; ?>
		<div class="<?php echo $designexo_blog_front_container_size; ?>">
			<div class="row">
        <?php
        $post_args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'category__in' => $designexo_theme_blog_category, 'post__not_in'=>get_option("sticky_posts")) ;
			query_posts( $post_args );
			if(query_posts( $post_args ))
			{	
				while(have_posts()):the_post();
				{ ?>
					<div class="col-lg-<?php if($activate_theme == 'Architect Decor'){ echo '4';}else{echo '6';} ?> col-md-<?php if($activate_theme == 'Architect Decor'){ echo '4';}else{echo '6';} ?> col-sm-12">
					    <article class="post wow animate fadeInUp" data-wow-delay=".3s">
                        <?php if(has_post_thumbnail()): ?>						
							<figure class="post-thumbnail">
							<?php $img_class =array('class' => "img-fluid");?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$img_class);?></a>
							</figure>
						<?php endif; ?>	
							<div class="post-content">
								<div class="media mb-3">
								<?php if( $designexo_home_blog_meta_disabled == true ): ?>
									<span class="posted-on">
										<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time class="days">
										<?php echo esc_html(get_the_date('j')); ?><small class="months"><?php echo get_the_date('M'); ?></small></time></a>
									</span>
								<?php endif; ?>
								    <div class="media-body">
										<header class="entry-header">
											<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
										</header>
										<div class="entry-meta">
											<span class="author">
												<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><span class="grey"><?php echo esc_html__('by ','arile-extra');?></span><?php echo esc_html(get_the_author());?></a>	
											</span>
											<?php $category_data = get_the_category_list();
											 if(!empty($category_data)) { ?>
												<span class="cat-links"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
											<?php } ?>
										</div>
										<div class="entry-content">	
										<?php the_content(__('Read More','arile-extra')); ?>
										</div>
								    </div>
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