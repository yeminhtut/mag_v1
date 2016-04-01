<?php
global $newmagz_option;

	$client_post_sticky = array(31363,32251);
	$args_sticky_client_posts = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'post__in' => $client_post_sticky,
		'posts_per_page' => 2
	);

	$sticky_client_posts = new WP_Query();
	$sticky_client_posts->query( $args_sticky_client_posts );

	$cat_list = '749';
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'cat' => $cat_list ,
		'ignore_sticky_posts' => 1,
		'tag__not_in' => array(741),
		'posts_per_page'=> 12,
	);

	$posts_feat = new WP_Query();
	$posts_feat->query($args);
	if ( $posts_feat->have_posts() ) :
?>

<!-- Start : Featured Slider -->
<div id="mainslider">
	<div class="container clearfix">
		<div class="preload"></div>
		<div class="warrior-carousel warrior-carousel-18 owl-carousel">

		<?php while( $sticky_client_posts->have_posts() ) : $sticky_client_posts->the_post(); ?>
			<div class="warrior-carousel-item">
				<article class="hentry slider-post">
					<div class="thumbnail">
					<?php
					// Featured image
					if ( has_post_thumbnail() ) {
						echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
						the_post_thumbnail('newmagz-featured-slider-exact');
						echo '</a>';
					} else {
						echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
						echo '<img src="http://placehold.it/297x379/333333/ffffff&amp;text=&nbsp;">';
						echo '</a>';
					}
					?>
					</div>	
					<div class="entry-content">
						<div class="post-category"></div>	
						<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), absint( 40 ), '...' ); ?></a></h3>
						<div class="detail-post">
							<?php echo warrior_featured_post_meta(); // display post meta ?>
							<p><?php echo wp_trim_words( get_the_excerpt(), absint( $newmagz_option['featured_slider_word_length']), '...' ); ?></p>
						</div>
					</div>
				</article>
			</div>
		<?php endwhile; ?>

		<?php while( $posts_feat->have_posts() ) : $posts_feat->the_post(); ?>
			<div class="warrior-carousel-item">
				<article class="hentry slider-post">
					<div class="thumbnail">
					<?php
					// Featured image
					if ( has_post_thumbnail() ) {
						echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
						the_post_thumbnail('newmagz-featured-slider');
						echo '</a>';
					} else {
						echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
						echo '<img src="http://placehold.it/297x379/333333/ffffff&amp;text=&nbsp;">';
						echo '</a>';
					}
					?>
					</div>	
					<div class="entry-content">
						<div class="post-category"></div>	
						<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), absint( 40 ), '...' ); ?></a></h3>
						<div class="detail-post">
							<?php echo warrior_featured_post_meta(); // display post meta ?>
							<p><?php echo wp_trim_words( get_the_excerpt(), absint( $newmagz_option['featured_slider_word_length']), '...' ); ?></p>
						</div>
					</div>
				</article>
			</div>
		<?php endwhile; ?>
		</div>
	</div>	
</div>
<!-- End : Featured Slider -->

<?php
	endif;
	wp_reset_postdata();
?>
