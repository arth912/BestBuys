<?php
/**
 * The template for displaying the content.
 * @package businessup
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="businessup-blog-post-box"> 
		<?php
		$post_thumbnail_url = get_the_post_thumbnail( get_the_ID(), 'img-fluid' );
		if ( !empty( $post_thumbnail_url ) ) {
		?>
		<a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>" class="businessup-blog-thumb">
					<?php echo $post_thumbnail_url; ?>
        </a>
		<?php
		}
		?>
		<article class="small"> 
			<h1 class="title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h1>

			<div class="businessup-blog-category"> 
			<span class="businessup-blog-date">
				<a href="<?php echo esc_url(get_month_link(esc_html(get_post_time('Y')),esc_html(get_post_time('m')))); ?>">
					<?php echo esc_html(get_the_date()); ?></a>
			</span> 
			<span class="cat-links">
				<?php   $cat_list = get_the_category_list();
				if(!empty($cat_list)) { ?>
				<?php the_category(', '); ?>
				<?php } ?>
			</span>	
				<a class="businessup-author" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php esc_html_e('by','businessup'); ?>
				<?php the_author(); ?>
				</a> 
			</div>
			
			<?php
				$businessup_more = strpos( $post->post_content, '<!--more' );
				if ( $businessup_more ) :
					echo get_the_content();
				else :
					echo get_the_excerpt();
				endif;
			?>
			
				<?php wp_link_pages( array( 'before' => '<div class="link">' . __( 'Pages:', 'businessup' ), 'after' => '</div>' ) ); ?>
		</article>
	</div>
</div>