<?php 
	$banner = rand(0,1);
	if ($banner == 0) { 
		set_banner_impression(1);
	?>
	<div id="google_ads_box" style="text-align:center;margin-bottom: 40px;">
		<a href="https://www.travelplanner.com.sg/customise-my-trip/" target="_blank">
			<img src="http://www.tripzilla.com/wp-content/uploads/2016/03/trip_planner.jpg" style="margin:0px auto;" class="banner_img" data-banneId = "1">
		</a>
	</div>
<?php	} else{ ?>
	<div id="google_ads_box" style="text-align:center;margin-bottom: 40px;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- TZM_300x250 -->
		<ins class="adsbygoogle"
		    style="display:inline-block;width:300px;height:250px"
		    data-ad-client="ca-pub-2847245452106876"
		    data-ad-slot="5886959270"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
<?php } ?>

