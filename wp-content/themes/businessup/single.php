<!-- =========================
     Page Breadcrumb   
============================== -->
<?php get_header(); 
get_template_part('index','banner'); ?>
<div class="clearfix"></div>
<!-- =========================
     Page Content Section      
============================== -->
<main id="content">
  <div class="container">
    <div class="row"> 
      <div class="<?php if( !is_active_sidebar('sidebar-1')) { echo "col-md-12"; } else { echo "col-md-9"; } ?> col-sm-8">
		      <?php if(have_posts())
		        {
		      while(have_posts()) { the_post(); ?>
          <div class="col-md-12">
            <div class="businessup-blog-post-box"> <a href="#" class="businessup-blog-thumb">
			        <?php if(has_post_thumbnail()): ?>
			         <?php $defalt_arg =array('class' => "img-fluid"); ?>
			         <?php the_post_thumbnail('', $defalt_arg); ?>
			        <?php endif; ?>
			        </a>
              <article class="small">
                <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="businessup-blog-category"> 
                  <span class="businessup-blog-date"><?php echo get_the_date('M'); ?> <?php echo get_the_date('j,'); ?> <?php echo get_the_date('Y'); ?></span> 
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
                <?php the_content(); ?>
              </article>
            </div>
          </div>
		      <?php } ?>
		      <div class="col-md-12 text-center">
            <?php the_posts_navigation(); ?>
          </div>  
          <div class="col-md-12">
            <div class="media businessup-info-author-block"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>" class="businessup-author-pic"> <?php echo get_avatar( get_the_author_meta( 'ID') , 150); ?> </a>
              <div class="media-body">
                <h4 class="media-heading"><span><i class="fa fa-user"></i><?php esc_html_e('by','businessup'); ?></span><a href "<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author(); ?></a></h4>
                <p><?php the_author_meta( 'description' ); ?></p>
                <div class="row">
                  <div class="col-md-6 col-pad7">
                    <ul class="list-inline info-author-social">
          					<?php 
          					$facebook_profile = get_the_author_meta( 'facebook_profile' );
          					if ( $facebook_profile && $facebook_profile != '' ) {
          					echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook-square"></i></a></li>';
          					} 
					
          					$twitter_profile = get_the_author_meta( 'twitter_profile' );
          					if ( $twitter_profile && $twitter_profile != '' ) 
          					{
          					echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter-square"></i></a></li>';
          					}
					
          					$google_profile = get_the_author_meta( 'google_profile' );
          					if ( $google_profile && $google_profile != '' ) {
          					echo '<li class="googleplus"><a href="' . esc_url($google_profile) . '" rel="author"><i class="fa fa-google-plus-square"></i></a></li>';
          					}
          					$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
          					if ( $linkedin_profile && $linkedin_profile != '' ) {
          					   echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin-square"></i></a></li>';
          					}
          					?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
		      <?php } ?>
         <?php comments_template('',true); ?>
      </div>
      <div class="col-md-3 col-sm-4">
      <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>