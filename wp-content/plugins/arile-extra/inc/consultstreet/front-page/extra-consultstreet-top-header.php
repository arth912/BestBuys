<?php 
$consultstreet_top_header_info_content  = get_theme_mod( 'consultstreet_top_header_info_content');
$consultstreet_top_header_social_content  = get_theme_mod( 'consultstreet_top_header_social_content');
$consultstreet_site_top_header_disabled  = get_theme_mod( 'consultstreet_site_top_header_disabled', true );
$consultstreet_site_top_header_info_disabled  = get_theme_mod( 'consultstreet_site_top_header_info_disabled', true );
$consultstreet_site_top_header_social_disabled  = get_theme_mod( 'consultstreet_site_top_header_social_disabled', true );
$consultstreet_top_header_bac_color  = get_theme_mod( 'consultstreet_top_header_bac_color', '#01012f' );
$consultstreet_top_header_container_size  = get_theme_mod( 'consultstreet_top_header_container_size', 'container-full' );
?>
<?php if($consultstreet_site_top_header_disabled == true): ?>
<!--Header Sidebar-->
	<header id="site-header" class="site-header">
		<div class="<?php echo $consultstreet_top_header_container_size; ?>">
			<div class="row">
			<?php if($consultstreet_site_top_header_info_disabled == true): ?>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<aside class="widget"> 
						<ul class="theme-contact-block">
							<?php 
							if ( ! empty( $consultstreet_top_header_info_content ) ) {
							$allowed_html = array(
							'br'     => array(),
							'em'     => array(),
							'strong' => array(),
							'b'      => array(),
							'i'      => array(),
							);
							$consultstreet_top_header_info_content = json_decode( $consultstreet_top_header_info_content );
							foreach ( $consultstreet_top_header_info_content as $header_info ) {
							$icon = ! empty( $header_info->icon_value ) ? apply_filters( 'consultstreet_translate_single_string',$header_info->icon_value, 'Theme Header Info' ) : '';
							$text = ! empty( $header_info->text ) ? apply_filters( 'consultstreet_translate_single_string',
							$header_info->text, 'Theme Header Info' ) : '';
			                $link = ! empty( $header_info->link ) ? apply_filters( 'consultstreet_translate_single_string', $header_info->link, 'Theme Header Info' ) : '';
                            $open_new_tab = $header_info->open_new_tab;  ?>	
							
							<li><?php if ( ! empty( $icon ) ) :?>
							<i class="fa <?php echo esc_html( $icon ); ?>">
							<?php endif; ?></i>
							<?php if ( ! empty( $text ) ) : ?>
							<?php if(!empty($link)){ ?>
							    <a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> > <?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?> </a>
							<?php }else{ ?>
							    <?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?>
							<?php } ?>
							<?php endif; ?>
							</li>
							<?php } } else { ?>						
								<li><i class="fa fa-clock-o"></i><?php esc_html_e('Mon - Sat 8.00 - 18.00. Sunday CLOSED','consultstreet'); ?></li>
								<li><i class="fa fa-phone"></i><?php esc_html_e('+14 1-800-1234-567','consultstreet'); ?></li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:info@consultstreet.com"><?php _e('info@consultstreet.com','consultstreet'); ?></a></li>									
							<?php 	}	?>
						</ul>
					</aside>
				</div>
			<?php endif ?>
			<?php if($consultstreet_site_top_header_social_disabled == true): ?>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<aside class="widget">
						<ul class="custom-social-icons">
					    <?php 
								if ( ! empty( $consultstreet_top_header_social_content ) ) {
									
								$consultstreet_top_header_social_content = json_decode( $consultstreet_top_header_social_content );
								foreach ( $consultstreet_top_header_social_content as $header_social ) {
								$icon = ! empty( $header_social->icon_value ) ? apply_filters( 'consultstreet_translate_single_string',$header_social->icon_value, 'Theme Header Social' ) : '';
								$link = ! empty( $header_social->link ) ? apply_filters( 'consultstreet_translate_single_string', $header_social->link, 'Theme Header Social' ) : '';
								$open_new_tab = $header_social->open_new_tab;  ?>

                                <?php if ( ! empty( $icon ) ) :?>
								    <?php if(!empty($link)){ ?>
										<li><a class="social-hover" href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a></li>
										<?php }else{ ?>
										<li><i class="fa <?php echo esc_html( $icon ); ?>"></i></li>
										<?php } ?>
								<?php endif; ?>
								
						    <?php } } else { ?>
								<li><a class="social-hover" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="social-hover" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="social-hover" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="social-hover" href="#"><i class="fa fa-linkedin"></i></a></li>	
							<?php } ?>
						</ul>
					</aside>
				</div>
			<?php endif ?>
			</div>
		</div>
	</header>
<?php endif; ?>