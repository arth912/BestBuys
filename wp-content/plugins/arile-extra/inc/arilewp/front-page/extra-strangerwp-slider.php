<?php
$arilewp_main_slider_options = get_theme_mod('arilewp_main_slider_content');
$arilewp_main_slider_disabled = get_theme_mod('arilewp_main_slider_disabled', true);
$arilewp_main_slider_overlay_disable = get_theme_mod('arilewp_main_slider_overlay_disable', true);
if( $arilewp_main_slider_disabled == true ): ?>
<section class="theme-main-slider" id="content">

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
					<div class="theme-text-center">
					<hr class="divider-sm-center">
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
	        else {  		
			if('ArileWP' == $activate_theme || 'Business Street' == $activate_theme){
					$image1_slide = 1;
					$image2_slide = 2;
			}
			if('StrangerWP' == $activate_theme){
					$image1_slide = 7;
					$image2_slide = 8;
			}
			if('NewYork City' == $activate_theme){	
					$image1_slide = 3;
					$image2_slide = 4;
			}
			if('InteriorPress' == $activate_theme){
					$image1_slide = 5;
					$image2_slide = 6;
			}
			if('Architect Design' == $activate_theme){
					$image1_slide = 9;
					$image2_slide = 10;
			}
			if('Ariletech' == $activate_theme){
					$image1_slide = 11;
					$image2_slide = 12;
			}
				
			if('InteriorPress' == $activate_theme){	
				$slide1_title = 'ELEGANT & COMFORTABLE';
				$slide2_title = 'AWARD WINNINGS DESIGN';							
		    }
			elseif('Architect Design' == $activate_theme){	
				$slide1_title = 'ARCHITECTRE & DESIGN';
				$slide2_title = 'INTERIOR & DESIGN';							
		    }
			elseif('Ariletech' == $activate_theme){	
				$slide1_title = 'Best Business Agency Company For Your Business';
				$slide2_title = 'We Provide Best Digital Marketing Solutions';							
		    }
			else{
			    $slide1_title = 'We Create Amazing WordPress Themes';
				$slide2_title = 'Best Digital Marketing Solutions';			
			}
				
			
			?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-slide<?php echo $image1_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center">
					    <hr class="divider-sm-center">
						<h1 class="title-large"><?php esc_html_e(''.$slide1_title.'','arile-extra'); ?></h1>
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
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-slide<?php echo $image2_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center">
					    <hr class="divider-sm-center">
						<h1 class="title-large"><?php esc_html_e(''.$slide2_title.'','arile-extra'); ?></h1>
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