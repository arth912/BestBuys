<?php
/**
 * businessup Admin Class.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'businessup_Admin' ) ) :

/**
 * businessup_Admin Class.
 */
class businessup_Admin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'businessup_admin_menu' ) );
		add_action( 'wp_loaded', array( __CLASS__, 'businessup_hide_notices' ) );
	}

	/**
	 * Add admin menu.
	 */
	public function businessup_admin_menu() {
		$theme = wp_get_theme( get_template() );

		$page = add_theme_page( esc_html__( 'About', 'businessup' ) . ' ' . $theme->display( 'Name' ), esc_html__( 'About', 'businessup' ) . ' ' . $theme->display( 'Name' ), 'activate_plugins', 'businessup-welcome', array( $this, 'welcome_screen' ) );
		add_action( 'admin_print_styles-' . $page, array( $this, 'businessup_enqueue_styles' ) );
	}

	/**
	 * Enqueue styles.
	 */
	public function businessup_enqueue_styles() {
		global $businessup_version;

		wp_enqueue_style( 'businessup-welcome', get_template_directory_uri() . '/css/themeinfo.css', array(), $businessup_version );
	}

	/**
	 * Hide a notice if the GET variable is set.
	 */
	public static function businessup_hide_notices() {
		if ( isset( $_GET['businessup-hide-notice'] ) && isset( $_GET['_businessup_notice_nonce'] ) ) {
			if ( ! wp_verify_nonce( $_GET['_businessup_notice_nonce'], 'businessup_businessup_hide_notices_nonce' ) ) {
			}

			if ( ! current_user_can( 'manage_options' ) ) {
			}

			$hide_notice = sanitize_text_field( $_GET['businessup-hide-notice'] );
		}
	}
	/**
	

	/**
	 * financeup_intro text/links shown to all about pages.
	 *
	 * @access private
	 */
	private function businessup_intro() {
		global $businessup_version;

		$theme = wp_get_theme( get_template() );

		// Drop minor version if 0
		$major_version = substr( $businessup_version, 0, 3 );
		?>
		<div class="businessup-theme-info">
			<h1>
				<?php esc_html_e('About', 'businessup'); ?>
				<?php echo $theme->display( 'Name' ); ?>
				<?php printf( '%s', $major_version ); ?>
			</h1>
		</div>

		<p class="businessup-actions">
			<a href="<?php echo esc_url( 'https://themeansar.com/themes/businessup/' ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Theme Info', 'businessup' ); ?></a>

			<a href="<?php echo esc_url( 'https://themeansar.com/demo/wp/businessup/' ); ?>" class="button button-secondary docs" target="_blank"><?php esc_html_e( 'Lite Demo', 'businessup' ); ?></a>

			<a href="<?php echo esc_url( 'https://themeansar.com/demo/wp/businessup/default/' ); ?>" class="button button-primary docs" target="_blank"><?php esc_html_e( 'Pro Demo', 'businessup' ); ?></a>

			<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/businessup/reviews/#new-post' ); ?>" class="button button-secondary docs" target="_blank"><?php esc_html_e( 'Rating this theme', 'businessup' ); ?></a>
		</p>

		<h2 class="nav-tab-wrapper">
			<a class="nav-tab <?php if ( empty( $_GET['tab'] ) && $_GET['page'] == 'businessup-welcome' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'businessup-welcome' ), 'themes.php' ) ) ); ?>">
				<?php echo $theme->display( 'Name' ); ?>
			</a>
			<a class="nav-tab <?php if ( isset( $_GET['tab'] ) && $_GET['tab'] == 'supported_plugins' ) echo 'nav-tab-active'; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'businessup-welcome', 'tab' => 'supported_plugins' ), 'themes.php' ) ) ); ?>">
				<?php esc_html_e( 'Supported Plugins', 'businessup' ); ?>
			</a>
		</h2>
		<?php
	}

	/**
	 * Welcome screen page.
	 */
	public function welcome_screen() {
		$current_tab = empty( $_GET['tab'] ) ? 'about' : sanitize_title( $_GET['tab'] );

		// Look for a {$current_tab}_screen method.
		if ( is_callable( array( $this, $current_tab . '_screen' ) ) ) {
			return $this->{ $current_tab . '_screen' }();
		}

		// Fallback to about screen.
		return $this->about_screen();
	}

	/**
	 * Output the about screen.
	 */
	public function about_screen() {
		$theme = wp_get_theme( get_template() );
		?>
		<div class="wrap about-wrap">

			<?php $this->businessup_intro(); ?>

			<div class="changelog point-releases">
				<div class="two-col">
					<div class="col-md-4 column-width-detail">
						<h3><?php esc_html_e( 'Theme Customizer', 'businessup' ); ?></h3>
					<p><a href="<?php echo admin_url( 'customize.php' ); ?>" class="button button-secondary"><?php esc_html_e( 'Customize', 'businessup' ); ?></a></p>
					</div>
					
					<div class="col-md-4 column-width-detail">
						<h3><?php esc_html_e( 'Home Page Section Widget', 'businessup' ); ?></h3>
						<p><a href="<?php echo admin_url( 'widgets.php' ); ?>" class="button button-secondary"><?php esc_html_e( 'Widgets', 'businessup' ); ?></a></p>
					</div>

					<div class="col-md-4 column-width-detail">
						<h3><?php esc_html_e( 'Documentation', 'businessup' ); ?></h3>
						<p><a href="<?php echo esc_url( 'https://themeansar.com/docs/wp/businessup/' ); ?>" class="button button-secondary"><?php esc_html_e( 'Documentation', 'businessup' ); ?></a></p>
					</div>

					<div class="col-md-4 column-width-detail">
						<h3><?php esc_html_e( 'Got theme support question?', 'businessup' ); ?></h3>
						<p><a href="<?php echo esc_url( 'https://wordpress.org/support/theme/businessup' ); ?>" class="button button-secondary"><?php esc_html_e( 'Support Forum', 'businessup' ); ?></a></p>
					</div>

					<div class="col-md-4 column-width-detail">
						<h3><?php esc_html_e( 'Upgrade to PRO version', 'businessup' ); ?></h3>
						<p><a href="<?php echo esc_url( 'https://themeansar.com/demo/wp/businessup/' ); ?>" class="button button-secondary"><?php esc_html_e( 'View Pro', 'businessup' ); ?></a></p>
					</div>

					<div class="col-md-4 column-width-detail">
						<h3><?php esc_html_e( 'Got sales related question?', 'businessup' ); ?></h3>
						<p><a href="<?php echo esc_url( 'https://themeansar.com/contact/' ); ?>" class="button button-secondary"><?php esc_html_e( 'Contact Page', 'businessup' ); ?></a></p>
					</div>

					<div class="col-md-4 column-width-detail">
						<h3>
							<?php
							esc_html_e( 'Translate', 'businessup' );
							echo ' ' . $theme->display( 'Name' );
							?>
						</h3>
						<p>
							<a href="<?php echo esc_url( 'http://translate.wordpress.org/projects/wp-themes/businessup' ); ?>" class="button button-secondary">
								<?php
								esc_html_e( 'Translate', 'businessup' );
								echo ' ' . $theme->display( 'Name' );
								?>
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="return-to-dashboard businessup">
				<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
					<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
						<?php is_multisite() ? esc_html_e( 'Return to Updates', 'businessup' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'businessup' ); ?>
					</a> |
				<?php endif; ?>
				<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'businessup' ) : esc_html_e( 'Go to Dashboard', 'businessup' ); ?></a>
			</div>
		</div>
		<?php
	}

	/**
	 * Output the supported plugins screen.
	 */
	public function supported_plugins_screen() {
		?>
		<div class="wrap about-wrap">

			<?php $this->businessup_intro(); ?>

			<p class="about-description"><?php esc_html_e( 'This theme recommends following plugins:', 'businessup' ); ?></p>
			<ol>
				<li><a href="<?php echo esc_url( 'https://wordpress.org/plugins/contact-form-7/' ); ?>" target="_blank"><?php esc_html_e( 'Contact Form 7', 'businessup' ); ?></a></li>
				<li><a href="<?php echo esc_url( 'https://wordpress.org/plugins/woocommerce/' ); ?>" target="_blank"><?php esc_html_e( 'WooCommerce', 'businessup' ); ?></a></li>
				<li><a href="<?php echo esc_url( 'https://wordpress.org/plugins/polylang/' ); ?>" target="_blank"><?php esc_html_e( 'Polylang', 'businessup' ); ?></a>
					<?php esc_html_e('Fully Compatible in Pro Version', 'businessup'); ?>
				</li>
				<li><a href="<?php echo esc_url( 'https://wpml.org/' ); ?>" target="_blank"><?php esc_html_e( 'WPML', 'businessup' ); ?></a>
					<?php esc_html_e('Fully Compatible in Pro Version', 'businessup'); ?>
				</li>
			</ol>

		</div>
		<?php
	}
}

endif;

return new businessup_Admin();