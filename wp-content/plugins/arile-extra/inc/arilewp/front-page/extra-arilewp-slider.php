<?php
$arilewp_main_slider_options = get_theme_mod('arilewp_main_slider_content');
$arilewp_main_slider_disabled = get_theme_mod('arilewp_main_slider_disabled', true);
$arilewp_main_slider_overlay_disable = get_theme_mod('arilewp_main_slider_overlay_disable', true);
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if( $arilewp_main_slider_disabled == true ): ?>
<section class="theme-main-slider" id="theme-slider">

    <div id="theme-main-slider" class="owl-carousel owl-theme">

		<?php 
			$arilewp_main_slider_options = json_decode($arilewp_main_slider_options);
			if( $arilewp_main_slider_options!='' )
				{
					foreach($arilewp_main_slider_options as $slide_iteam){	
						$title = ! empty( $slide_iteam->title ) ? $slide_iteam->title : '';
						$img_description = ! empty( $slide_iteam->text ) ? $slide_iteam->text : '';
						$readmorelink = ! empty( $slide_iteam->link ) ? $slide_iteam->link : '';	
						$readmore_button = ! empty( $slide_iteam->button_text ) ? $slide_iteam->button_text : '';
						$open_new_tab = $slide_iteam->open_new_tab;
			
			?>			
						
			<?php if($slide_iteam->image_url!=''){ ?>			
			<div class="item" style="background-image:url(<?php echo $slide_iteam->image_url; ?>);">
			<?php } ?>
			<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
				<div class="container theme-slider-content">
					<div class="theme-text-left <?php if($activate_theme != 'Business Street') { echo 'theme-caption-bg'; } ?>">
					<?php if($activate_theme == 'Business Street') { echo '<hr class="divider-sm-left">'; } ?>
					<?php if($title != ''){ ?>
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
				    <?php } ?>
					<?php if($img_description!= ''){ ?>
						<p class="description"><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
					<?php } ?>
					<?php if($readmore_button!='' ) { ?>
						<div class="mt-4 pt-2">
							<a href="<?php echo $readmorelink ;?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-small btn-default"><?php echo esc_html($readmore_button) ?></a>
						</div>
                    <?php } ?>						
					</div>
				</div>
			<?php } ?>
			<?php if($arilewp_main_slider_overlay_disable == true) { ?>
			<div class="overlay"></div>
			<?php } ?>
			<?php if($slide_iteam->image_url!=''){ ?>			
			</div>
			<?php } ?>			
			<?php							
				}	
		    }
	        else { ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-slide1.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left <?php if($activate_theme != 'Business Street') { echo 'theme-caption-bg'; } ?>">
					    <?php if($activate_theme == 'Business Street') { echo '<hr class="divider-sm-left">'; } ?>
						<h1 class="title-large"><?php esc_html_e('We Create Amazing WordPress Themes','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($arilewp_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-slide2.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left <?php if($activate_theme != 'Business Street') { echo 'theme-caption-bg'; } ?>">
					    <?php if($activate_theme == 'Business Street') { echo '<hr class="divider-sm-left">'; } ?>
						<h1 class="title-large"><?php esc_html_e('Best Digital Marketing Solutions','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We are very happy to present to you ArileWP, the powerful and flexible multi-purpose WordPress theme. Not only does ArileWP outstand with many new features but suitable for all creatives and businesses. Join 2500+ customers.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($arilewp_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			
	        <?php } ?>
			
		</div>
			
</section>
<?php endif; ?>