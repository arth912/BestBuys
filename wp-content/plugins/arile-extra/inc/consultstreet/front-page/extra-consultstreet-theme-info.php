<?php 
$consultstreet_theme_info_content  = get_theme_mod( 'consultstreet_theme_info_content');
$consultstreet_theme_info_disabled = get_theme_mod('consultstreet_theme_info_disabled', true);
?>
<?php if($consultstreet_theme_info_disabled == true): ?>
<!-- Theme info Area -->
<div class="container" id="theme-info-area">
	<div class="row theme-info-area">
				<?php 
				if ( ! empty( $consultstreet_theme_info_content ) ) {
				$allowed_html = array(
				'br'     => array(),
				'em'     => array(),
				'strong' => array(),
				'b'      => array(),
				'i'      => array(),
				);
				$consultstreet_theme_info_content = json_decode( $consultstreet_theme_info_content );
				foreach ( $consultstreet_theme_info_content as $info_item ) {
				$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'consultstreet_translate_single_string',$info_item->icon_value, 'Theme Info Area' ) : '';
				$title = ! empty( $info_item->title ) ? apply_filters( 'consultstreet_translate_single_string', $info_item->title, 'Theme Info Area' ) : '';
				$text = ! empty( $info_item->text ) ? apply_filters( 'consultstreet_translate_single_string',
				$info_item->text, 'Theme Info Area' ) : '';
				$link = ! empty( $info_item->link ) ? apply_filters( 'consultstreet_translate_single_string', $info_item->link, 'Theme Info Area' ) : '';
				$open_new_tab = $info_item->open_new_tab;
				?>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media">
								<?php if ( ! empty( $icon ) ) :?>
									<i class="icon fa <?php echo esc_html( $icon ); ?>"></i>
								<?php endif; ?>	
								<div class="media-body align-self-center">
								<?php if ( ! empty( $title ) ) : 
									if(empty($link)){ ?>
										<h5 class="theme-info-area-title"><?php echo esc_html( $title ); ?></h5><?php
									}else{
										?>
										<h5 class="theme-info-area-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
									} ?>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>		
									<span class="info-details"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></span>
								<?php endif; ?>			
								</div>
							</div>
						</div>
				<?php } } else { ?>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media">
								<i class="icon fa fa-user-o"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Expert Instruction','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Find the right instructor for you','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media">
								<i class="icon fa fa-headphones"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Premium Support','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('014 1547 925 - 123 4567 890','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media">
								<i class="icon fa fa-trophy"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Well Experienced','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('25 years of experience','arile-extra'); ?></span>
								</div>
							</div>
						</div>				
				<?php } ?>
	</div>
</div>
<?php endif; ?>