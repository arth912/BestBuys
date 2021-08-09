<?php 
$designexo_theme_info_content  = get_theme_mod( 'designexo_theme_info_content');
$designexo_theme_info_disabled = get_theme_mod('designexo_theme_info_disabled', true);
?>
<?php if($designexo_theme_info_disabled == true): ?>
<!-- Theme info Area -->
<section class="theme-info-area" id="theme-info-area">
<div class="container" >
	<div class="row">
				<?php 
				if ( ! empty( $designexo_theme_info_content ) ) {
				$allowed_html = array(
				'br'     => array(),
				'em'     => array(),
				'strong' => array(),
				'b'      => array(),
				'i'      => array(),
				);
				$designexo_theme_info_content = json_decode( $designexo_theme_info_content );
				foreach ( $designexo_theme_info_content as $info_item ) {
				$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'designexo_translate_single_string',$info_item->icon_value, 'Theme Info Area' ) : '';
				$title = ! empty( $info_item->title ) ? apply_filters( 'designexo_translate_single_string', $info_item->title, 'Theme Info Area' ) : '';
				$text = ! empty( $info_item->text ) ? apply_filters( 'designexo_translate_single_string',
				$info_item->text, 'Theme Info Area' ) : '';
				?>
						<div class="col-lg-<?php if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme){ echo '3'; } ?><?php if('Empresa' == $activate_theme){ echo '4'; } ?> col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
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
				    <?php if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme){ ?>
						<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-star-o"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Award Winning Solutions','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Our unique offer','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-calendar"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Exclusive 10 Years Warranty','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Whats included','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-home"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Modern Interior Projects','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('See our works','arile-extra'); ?></span>
								</div>
							</div>
						</div>	
					    <div class="col-lg-3 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-pencil"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Get a personal estimate','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Contact us','arile-extra'); ?></span>
								</div>
							</div>
						</div>	
					<?php } ?>	
						
					<?php if('Empresa' == $activate_theme){ ?>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-trophy"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Award winning solutions','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Know more','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-bitcoin"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Saving and strategy','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Know more','arile-extra'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-xs-12">
							<div class="media wow animate flipInX" data-wow-delay=".3s">
								<i class="icon fa fa-bar-chart"></i>
								<div class="media-body align-self-center">
									<h5 class="theme-info-area-title"><?php esc_html_e('Online media marketing','arile-extra'); ?></h5>
									<span class="info-details"><?php esc_html_e('Know more','arile-extra'); ?></span>
								</div>
							</div>
						</div>	
					<?php } ?>	
						
				<?php } ?>
	</div>
</div>
</section>
<?php endif; ?>