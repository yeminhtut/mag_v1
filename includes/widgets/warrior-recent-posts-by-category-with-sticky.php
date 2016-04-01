<?php
/**
 * Warrior Recent Post by Category with sticky posts (Sidebar)
 *
 * @package WordPress
 * @subpackage Newmagz
 * @since Newmagz 1.0.0
 */
 
 
// Widgets
add_action( 'widgets_init', 'warrior_recent_post_by_cat_widget_with_sticky' );

// Register our widget
function warrior_recent_post_by_cat_widget_with_sticky() {
	register_widget( 'Warrior_Recent_Post_By_Category_With_Sticky' );
}

// Recent Post by Category Warrior Widget
class Warrior_Recent_Post_By_Category_With_Sticky extends WP_Widget {

	//  Setting up the widget
	function Warrior_Recent_Post_By_Category_With_Sticky() {
		$widget_ops  = array( 'classname' => 'type-1', 'description' => esc_html__('Display recent post by category widget with sticky', 'newmagz') );
		$control_ops = array( 'id_base' => 'warrior_recent_post_by_category_with_sticky' );

		parent::__construct( 'warrior_recent_post_by_category_with_sticky', esc_html__('Warrior Recent Post by Category With Sticky', 'newmagz'), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		global $newmagz_option;

		extract( $args );

		$warrior_recent_post_by_category_title_with_sticky        = 'Popular posts';
		$warrior_recent_post_by_category_title_with_sticky_count  = 12;
		$warrior_recent_post_by_category 	  			  		  = 309;
		$warrior_recent_post_by_category_with_sticky_count 		  = 6;

 		$client_post_sticky = array(32251,31363);
		$args_sticky_popular_posts = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'ignore_sticky_posts' => 1,
			'post__in' => $client_post_sticky,
			'posts_per_page' => absint( $warrior_recent_post_by_category_with_sticky_count )
		);

		$sticky_popular_posts = new WP_Query();
		$sticky_popular_posts->query( $args_sticky_popular_posts );

		// Get the items of popular
		$args_recent_post_by_category = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'cat' => $warrior_recent_post_by_category,
			'ignore_sticky_posts' => 1,
			'post__not_in' => $client_post_sticky,
			'posts_per_page' => absint( $warrior_recent_post_by_category_with_sticky_count )
		);
		$popular_posts_with_sticky = new WP_Query();
		$popular_posts_with_sticky->query( $args_recent_post_by_category );

		

		echo $before_widget;
		echo $before_title;
		echo esc_attr( $warrior_recent_post_by_category_title_with_sticky );
		echo $after_title;
?>
		<!-- sticky two -->
		<?php while( $sticky_popular_posts->have_posts() ) : $sticky_popular_posts->the_post(); ?>
			<div class="post-list-style">
				<ul>			
					<li>
						<div class="thumbnail">
						<?php
						// Featured image
							if ( has_post_thumbnail() ) {
								echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
								the_post_thumbnail('newmagz-small-thumbnail-2');
								echo '</a>';
							} else {
								echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
								echo '<img src="http://placehold.it/150x150&text=&nbsp;" />';
								echo '</a>';
							}
						?>	
						</div>	
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), absint( $warrior_recent_post_by_category_title_with_sticky_count ) .' ...' ); ?></a></h3>
						
					</li>						
				</ul>
			</div>
		<?php endwhile; ?>
		<?php while( $popular_posts_with_sticky->have_posts() ) : $popular_posts_with_sticky->the_post(); ?>			
				<div class="post-list-style">
				<ul>			
					<li>
						<div class="thumbnail">
						<?php
						// Featured image
							if ( has_post_thumbnail() ) {
								echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
								the_post_thumbnail('newmagz-small-thumbnail-2');
								echo '</a>';
							} else {
								echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
								echo '<img src="http://placehold.it/150x150&text=&nbsp;" />';
								echo '</a>';
							}
						?>	
						</div>	
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), absint( $warrior_recent_post_by_category_title_with_sticky_count ) .' ...' ); ?></a></h3>
						
					</li>						
				</ul>
				</div>
			<?php
				endwhile;
			?>
<?php
		echo $after_widget;
		wp_reset_postdata();
	}
}
?>