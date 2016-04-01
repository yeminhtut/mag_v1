<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry full-width-post' ); ?> >
					<header class="single-post-header">						
						<?php if (!has_tag("editor's pick")) { ?>
							<h1 class="post-title"><?php the_title(); ?></h1>
						<?php } else{ ?>
							<h1 id="post-title-travel-fair" class="post-title"><?php the_title(); ?></h1>
							<span style="float:right;"><img src="/wp-content/uploads/2016/02/editorschoicelogo-1.png" style="height:90px;"></span>
							<div style="clear:both;"></div>
						<?php }?>
						<?php// echo warrior_post_meta(); // display post meta ?>
						<?php echo magazine_dual_author(); // display post meta ?>
					</header>
					<div class="thumbnail">
					<?php
					if ($check_mobile === true) {
						//	get_template_part('partials/widgets/widget','travelFair300x250');
						}
					?>
					</div>					
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<p class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'newmagz' ) . '</span>', 'after' => '</p>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div>

					<div class="tags">
					<?php					
						if( has_tag() ) : // display tags
							the_tags( '<span>', '</span><span>', '</span>' );
						endif;
					?>
					</div>	

					<?php 
						if ($check_mobile == false) {
							get_template_part( 'includes/share-buttons' ); // display share buttons section 
						}
						else{
							echo '<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="like" data-width="300px" data-show-faces="false" data-share="false" style="margin-bottom:15px;"></div>';
						}						
					?>
					<?php warrior_set_post_views( get_the_ID() ); // set post view count ?>
				</article>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			
			<?php get_template_part( 'includes/autoload-next-posts-nav' ); // display post navigation section ?>		
			<?php get_template_part( 'includes/author-bio' ); // display about author section ?>
			<?php get_template_part( 'partials/widgets/widget','subscribeSingleBottom' ); ?>
			<?php 						
				switch ($check_mobile) {
					case 'true':
						get_template_part( 'includes/related-postsMobile' );
						break;			
					default:
						get_template_part( 'includes/related-postBasedOnDest' );
						break;
				}		
			?>
				<!-- <div id="facebook_cmt">
					<h3 class="main-box-title" style="border-bottom:none !important;">Share with us your thoughts</h3>
					<div id="comment_box_wrap" style="margin-bottom:40px;">
						<div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="5" data-colorscheme="light" data-width="100%" data-notify="true"></div>
					</div>	
				</div> -->