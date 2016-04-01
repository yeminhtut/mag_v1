<!-- Start : Sidebar Section -->
<div id="secondary-content" class="sidebar">
	<?php
		get_template_part('partials/widgets/widget','facebook');
		get_template_part('partials/widgets/widget','ads300x250');
	?>
	<?php	
		dynamic_sidebar( 'home-sidebar' );
		get_template_part('partials/widgets/widget', 'category');
		//get_template_part('partials/widgets/widget','ads300x600');
		$check_mobile = detect_mobile();
		if ($check_mobile === false) {
			//get_template_part('partials/widgets/widget','travelFair300x600'); 
			get_template_part('partials/widgets/widget','ads300x600');
		}
		// else{
		// 	get_template_part('partials/widgets/widget','travelFair300x250');
			
		// }		
	?>	
</div>
<!-- End : Sidebar Section -->