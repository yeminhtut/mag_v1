<?php
	$widget_url = "http://tripzilla.sg/widgets/tp_feed_new/europe/3";
	$featured_post_id = 21988;
	$post_author_id = get_post_field( 'post_author', $featured_post_id );	
	$author_name = get_userdata($post_author_id)->display_name;
	$post_date = get_the_date( 'Y-m-d', $featured_post_id );
?>
<!-- Start : Sidebar Section -->
<div id="secondary-content" class="sidebar">
	<div class="sidebar-widget">
		<div>
			<a href="https://www.travelplanner.com.sg/customise-my-trip/" target="_blank"/>
				<?php set_banner_impression(1); ?>
				<img src="http://static.tripzilla.com/thumb/f/a/40698_300x250.jpg" style="margin: 0 auto;" class="banner_img" data-banneId = "1"/>
			</a>
		</div>		
	</div>
	<div class="sidebar-widget">
		<div class="inner">
			<div class="widget-title"><h4>TOUR PACKAGES</h4></div>
			<iframe src="<?php echo $widget_url; ?>" frameborder="0" scrolling="no" style="height:900px;width:100%;" id="sg_ifr"></iframe>
		</div>
	</div>	
	<div class="sidebar-widget">
		<div class="inner">
			<div id="expert-title"><h4>EUROPE EXPERTS</h4></div>	
			<div class="destination-expert">
				<a href="http://tripzilla.sg/directory/review/225/jetabout-holidays" target="_blank">
					<img src="http://res.cloudinary.com/tzsg/image/upload/q_90,w_75,h_75,c_lpad/tzsg_cd%7C706830.jpg">
				</a>				
			</div>	
			<div class="destination-expert">
				<a href="http://tripzilla.sg/directory/review/5/ctc-travel" target="_blank">
					<img src="http://res.cloudinary.com/tzsg/image/upload/q_90,w_75,h_75,c_lpad/tzsg_cd%7C5152.jpg">
				</a>				
			</div>	
			<div class="destination-expert">
				<a href="http://tripzilla.sg/directory/review/680/c-e-holidays" target="_blank">
					<img src="http://res.cloudinary.com/tzsg/image/upload/q_90,w_75,h_75,c_lpad/tzsg_cd%7C131731.jpg">
				</a>				
			</div>
			<div class="cls"></div>
		</div>
	</div>
</div>
<!-- End : Sidebar Section -->
<script type="text/javascript">
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";	
	var eventer = window[eventMethod];	
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent, function (e) {
			if (e.origin == 'http://tripzilla.sg') {
			var iframeHeight = e.data;			
		    document.getElementById("sg_ifr").style.height = iframeHeight+'px'; 
		}		          
	}, false);	
</script>