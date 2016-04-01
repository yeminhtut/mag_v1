<?php
/**
 * Template for displaying single posts.
 */
?>
<?php get_header(); ?>
<?php global $newmagz_option; ?>
<?php $check_mobile = detect_mobile(); ?>
<!-- Start : Single Page -->
<div id="maincontent" style="overflow:hidden;">
	<div class="container clearfix">
		<div id="primary" class="content-area site-main" role="main">
			<section id="single-post" class="single-post">
				<?php get_template_part('content');?>
			</section>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- End : Single Page -->
<?php get_footer(); ?>

<style type="text/css">
#post-title-travel-fair{
	float:left;width:75%;
}
.ta_logo{width: 100px !important;}
@media screen and (max-width: 320px){
	#post-title-travel-fair{
		width: 70%;
	}
}
</style>