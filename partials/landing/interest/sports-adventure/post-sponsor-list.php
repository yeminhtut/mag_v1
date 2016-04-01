<div class="section-title" style="margin-bottom: 20px!important;border-bottom: 1px solid #dedede;">
	<h3 class="interest-section-sponspor-title">Must-do in Sydney</h3>
	<span style="float:right;" id="sponsor_link"><i>Voice of <a href="http://www.bridgeclimb.com/climbs/#time" target="_blank" style="color: #ec407a;">Bridge Climb Sydney</a></i></span>
	<div style="clear:both"></div>
</div>
<div id="sponsor_content_wrapper">
	<?php	
	    $articlesIDs = '31086';
	    $result = explode(',', $articlesIDs);
	    foreach ($result as $k => $v) {
	    $postId = $result[$k];  
	    $post = get_post($postId);  
	    setup_postdata( $post );
	?>

	<div class="column column-1">
		<article class="hentry full-width-post" data-wow-delay="0.3s" style="margin-bottom:30px;">
			<div class="full-thumbnail">
				<a href="<?php echo get_permalink($postId)?>" title="<?php the_title(); ?>">
					<?= the_post_thumbnail('newmagz-single-thumbnail-large')?>
				</a>
			</div>
			<div class="full-entry-content">
				<h3 class="full-post-title">
					<a href="<?php echo get_permalink($postId)?>"><?php the_title(); ?></a></h3>
					<?= warrior_post_meta();?>
			</div>
		</article>
	</div>

	<?php wp_reset_postdata(); ?>
	<?php }?>
	<div class="row" id="sponsor_content_section_two">
	<?php	
	    $articlesIDs = '31060,31530';
	    $result = explode(',', $articlesIDs);
	    foreach ($result as $k => $v) {
	    $postId = $result[$k];  
	    $post = get_post($postId);  
	    setup_postdata( $post );
	?>
		<div class="column column-2">
			<article class=" hentry full-width-post" data-wow-delay="0.3s">
				<div class="thumbnail">
					<a href="<?php echo get_permalink($postId)?>" title="<?php the_title(); ?>">
						<?= the_post_thumbnail('newmagz-large-thumbnail-2')?>
					</a>
				</div>
				<div class="entry-content">
					<div class="post-category"></div>
					<h3 class="post-title">
						<a href="<?php echo get_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<div class="entry-meta" style="margin-bottom:15px !important;">
						<?= warrior_post_meta();?>
					</div>
				</div>
			</article> 
		</div>
	<?php wp_reset_postdata(); ?>
	<?php }?>
	</div>
</div>
<style type="text/css">
	#sponsor_content_wrapper{
		background-color: #f3f3f3;
    	padding: 30px 50px 0px 50px;
    	margin-bottom: 30px;
    }
	#sponsor_content_section_two img{padding-right:20px;}
	.interest-section-sponspor-title{
	    margin-bottom: 0px;
	    font-size: 35px;
	    padding-bottom: 15px;
	}
	.full-thumbnail img{
		width:100%;
	}
	.full-entry-content{
		margin-top: 20px;
		text-align: center;
	}
	.full-post-title{
		text-align: center;
		margin-bottom: 10px;
		font-size: 24px;
    	font-family: Merriweather;
	}
	.full-entry-content .entry-meta .author,.full-entry-content .entry-meta .author a{color:#ec407a;}
</style>