<form method="get" id="searchform" class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'designexo' ); ?>" name="s" id="s">
	<div class="input-group-append">
		<button class="btn btn-success" type="submit"><?php esc_html_e( 'Go', 'designexo' ); ?></button> 
	</div>
</form>