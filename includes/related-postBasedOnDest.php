<?php
/**
 * Template for displaying related posts.
 *
 */
?>
<?php
// Get current category
$categories = get_the_category();
$continent_arr_ids = array(169,163,33,337,168,16,187,16,254,498);//should be based on specific country 
$interest_arr_ids = array(683);
$cat_ids = array();
$post_count = 0;
//based on destination
foreach ($categories as $category) {
	//echo '<div id="check_related" style="display:none;">'.$category->term_id;echo $category->category_nicename;echo $category->category_parent;echo 'post count'.$category->category_count;echo '<br/>';echo "<hr/></div>";
	if ($category->category_parent !== 0 && in_array($category->category_parent, $interest_arr_ids) == FALSE && in_array($category->term_id, $continent_arr_ids) == FALSE) {
			$post_count += $category->category_count;		
			$cat_ids[] = $category->term_id;
	}
}
//if no destination, based on interest
if (empty($cat_ids)) {
	foreach ($categories as $category) {	
		if ($category->category_parent !== 0 && in_array($category->category_parent, $interest_arr_ids) == TRUE && in_array($category->term_id, $continent_arr_ids) == FALSE) {
				$post_count += $category->category_count;		
				$cat_ids[] = $category->term_id;
		}
	}
}
?>
<!-- <div id="check_related" style="display:none;"><?php// var_dump($cat_ids);?></div> -->
<div class="article-widget related-post">
	<div class="widget-title"><h4><?php esc_html_e('Related Posts', 'newmagz'); ?></h4></div>
	<div class="post-list clearfix">
		<div class="row">
			<?php
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'rand',
				'category__in' => $cat_ids,
				'post__not_in' => array( get_the_ID() ),
				'posts_per_page' => 3
			);
			$posts_related = new WP_Query();
			$posts_related->query($args);
			if ( $posts_related->have_posts()) :
			?>
			<?php while( $posts_related->have_posts() ) : $posts_related->the_post(); ?>
				<div class="column column-3">
					<article class="hentry full-width-post">
						<div class="thumbnail">
						<?php
						// Featured image
						if ( has_post_thumbnail() ) {
							echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
							//the_post_thumbnail('newmagz-medium-thumbnail-2');
							the_post_thumbnail( array(262, 150) );
							echo '</a>';
						} else {
							echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
							echo '<img src="http://placehold.it/262x150&text=&nbsp;" />';
							echo '</a>';
						}
						?>
						</div>	
						<div class="entry-content">
							<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 30, '...' ); ?></a></h3>
							<?php echo warrior_featured_post_meta(); ?>
						</div>
					</article>
				</div>
			<?php 
			endwhile;
			endif;
			wp_reset_postdata();
			?>	
		</div>
	</div>
</div>
