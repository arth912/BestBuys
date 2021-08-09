<?php 
$arilewp_theme_info_content  = get_theme_mod( 'arilewp_theme_info_content');
$arilewp_theme_info_disabled = get_theme_mod('arilewp_theme_info_disabled', true);
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($arilewp_theme_info_disabled == true): ?>
<div class="container <?php if($activate_theme == 'Ariletech') { echo 'vrsn-two'; } ?>" id="theme-info-area">
	<div class="row theme-info-area">
	<?php 
	if ( ! empty( $arilewp_theme_info_content ) ) {
		$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
			$arilewp_theme_info_content = json_decode( $arilewp_theme_info_content );
				foreach ( $arilewp_theme_info_content as $info_item ) {
				$icon = ! empty( $info_item->icon_value ) ? $info_item->icon_value : '';
				$title = ! empty( $info_item->title ) ? $info_item->title : '';
				$text = ! empty( $info_item->text ) ? $info_item->text : '';
				?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="media">
								<?php if ( ! empty( $icon ) ) :?>
									<i class="icon fa <?php echo esc_html( $icon ); ?>"></i>
								<?php endif; ?>	
								<div class="media-body align-self-center">
								<?php if ( ! empty( $title ) ) : ?>
										<h5 class="theme-info-area-title"><?php echo esc_html( $title ); ?></h5>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>		
									<span class="info-details"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></span>
								<?php endif; ?>			
								</div>
							</div>
						</div>
				<?php } } else { ?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="media">
								<i class="icon fa fa-user-o"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Trusted Services','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('We are trusted our customers','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="media">
								<i class="icon fa fa-headphones"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('24/7 Support','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('014 1547 925 - 123 4567 890','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="media">
								<i class="icon fa fa-trophy"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Well Experienced','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('18 years of experience','arile-extra'); ?></span>
								</div>
							</div>
						</div>				
				<?php } ?>
	</div>
</div>
<?php endif; ?>