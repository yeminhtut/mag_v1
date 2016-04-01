<style type="text/css">
	#sidebar-featured-article ul{margin:10px;}
	#sidebar-featured-article ul li{
		display: inline-block;
		width: 32.3333%;
		padding-bottom:0px;
	}
	.gridder-list .overlay{    
		position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	    background: rgba(0, 0, 0, 0.3);
	}
    .gridder-list .pricing{
        color: #fff;
	    position: absolute;
	    top: 17%;
	    left: 10%;
	    font-size: 14px;
	    line-height: 20px;
	    width: 80%;
	    text-align: center;
	}
</style>
<!-- Start : Sidebar Section -->
<div id="secondary-content" class="sidebar">
	<div class="sidebar-widget">
		<div id="sidebar-featured-article" style="padding-bottom:20px;">
			<div class="fetaured-caption caption-black"><span>BOOK A CLIMB</span></div>
			<a href="http://www.bridgeclimb.com/climbs/#time" target="_blank">
				<ul>
					<li class="gridder-list">
							<img src="http://magazine.tripzilla.com/web/sponsor_photos/sponsor1.jpg">
							<div class="overlay" style="display: block;"></div>
							<div class="pricing">DAY<br/><span style="text-decoration:underline;">268</span></div>
					</li>
					<li class="gridder-list">
							<img src="http://magazine.tripzilla.com/web/sponsor_photos/sponsor2.jpg">
							<div class="overlay" style="display: block;"></div>
							<div class="pricing">TWILIGHT<br/><span style="text-decoration:underline;">333</span></div>
					</li>
					<li class="gridder-list">
							<img src="http://magazine.tripzilla.com/web/sponsor_photos/sponsor3.jpg">
							<div class="overlay" style="display: block;"></div>
							<div class="pricing">DAWN<br/><span style="text-decoration:underline;">353</span></div>
					</li>
					<li class="gridder-list">
							<img src="http://magazine.tripzilla.com/web/sponsor_photos/sponsor4.jpg">
							<div class="overlay" style="display: block;"></div>
							<div class="pricing">NIGHT<br/><span style="text-decoration:underline;">228</span></div>
					</li>
					<li class="gridder-list">
							<img src="http://magazine.tripzilla.com/web/sponsor_photos/sponsor5.jpg">
							<div class="overlay" style="display: block;"></div>
							<div class="pricing">SAMPLER<br/><span style="text-decoration:underline;">158</span></div>
					</li>
					<li class="gridder-list">
							<img src="http://magazine.tripzilla.com/web/sponsor_photos/blank.png">
							<div class="overlay" style="display: block;"></div>
							<div class="pricing">VIEW<br/><span>CLIMBS</span></div>
					</li>
				</ul>
			</a>
		</div>
	</div>	
	<div class="sidebar-widget">
		<?php
			// $check_mobile = detect_mobile(); 		
			// switch ($check_mobile) {
			// 	case 'true':
			// 		get_template_part('partials/widgets/widget','ads300x250');
			// 		break;			
			// 	default:
			// 		get_template_part('partials/widgets/widget','ads300x600');
			// 		break;
			// }
		?>
	</div>		
	<div class="sidebar-widget">
	    <div id="widget-warrior_recent_post_by_category-4" class="sidebar-widget row type-1">
	        <div class="inner">
	            <div class="widget-title"><h4>TRAVEL INSPIRATIONS</h4></div>
	        <?php 
	            $args_posts_list_3 = array(
					'post_type' 			=> 'post',
					'post_status' 			=> 'publish',
					'category__and' 		=> array(6),//island id
					'posts_per_page' 		=> 6
				);

				$posts_list_3 = new WP_Query();
				$posts_list_3->query( $args_posts_list_3 );
			
				if ( $posts_list_3->have_posts() ) :
				while( $posts_list_3->have_posts() ) : $posts_list_3->the_post();?>
		            <div class="post-list-style">
		                <ul>
		                    <li>
		                    	<div class="thumbnail">
		                        <?php
									// Featured image
									if ( has_post_thumbnail() ) {
										echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
										the_post_thumbnail('thumbnail');
										echo '</a>';
									} else {
										echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
										echo '<img src="http://placehold.it/150x150&text=&nbsp;" />';
										echo '</a>';
									}
								?>
								</div>
		                        <h3 class="post-title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
		                        <div class="post-category" style="margin-left:65px;"></div>
		                    </li>
		                </ul>
		            </div>	
	        <?php
	            endwhile;
				endif;   
			?>   
	        </div>
	    </div>
	</div>
</div>
<!-- End : Sidebar Section -->