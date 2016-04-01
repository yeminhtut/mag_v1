jQuery(document).ready(function(){
	var has_been_tracked = false;
		jQuery('.banner_img').click(function(){
			var banner_id = jQuery('.banner_img').attr("data-banneId");
			var data = {banner_id:banner_id};
			jQuery.ajax({
		            type: "POST",
		            url: "/wp-content/plugins/mag-from-helper/processing/banner_tracking.php",
		            data: data,
		            dataType: "html",
		            success: function(data) {
				   		console.log(data);
		            },
		            complete: function() {
		               has_been_tracked = true;
		            }
		        });	
		});
	});