<?php
	$country_code = get_geoIP();
	$keywords = simple_fields_value('keywords');
	$keyword_arr = explode(',', $keywords);	
	$key_index = 0;
	if (count($keyword_arr) > 1) {
		$key_index = array_rand($keyword_arr, 1);			
	}
	$filter_key = trim(strip_tags($keyword_arr[$key_index]));
	$filter_key = strtolower($filter_key);	
	$filter_key = keyword_dictionary($filter_key);	
	$filter_key = str_replace(' ', '-', $filter_key);
	$custom_keyword = $filter_key;

	switch ($country_code) {
		case 'PH':		
			$widget_url = "http://tripzilla.ph/widgets/tp_feed/".$custom_keyword;
			break;			
		case 'MY':		
			$widget_url = "http://tripzilla.my/widgets/tp_feed/".$custom_keyword;			
			break;			
		default:
			$widget_url = "http://tripzilla.sg/widgets/tp_feed_new/".$custom_keyword;							
			break;
		}

	$options['http'] = array('method' => "HEAD",'ignore_errors' => 1,'timeout'  => 4.0 );
	$context = stream_context_create($options);

	//$time_start = microtime(true);

	$response_body = file_get_contents($widget_url, NULL, $context);

	//$time_end = microtime(true);

	//$exectution_time = $time_end - $time_start;

	$code = '';
    if (isset($response_body) && $response_body !== FALSE) {
    	$responses = parse_http_response_header($http_response_header);
		$code = $responses[0]['status']['code']; // last status code
    }
	
	//echo '<div id="response_info" style="display:none;">response code is '.$code.' and Process Time: '.$exectution_time.'</div>';
	
	$tripzilla_iframe = NULL;
	if ($code == 200) {		
		$tripzilla_iframe = '<iframe src='.$widget_url.' frameborder="0" scrolling="no" style="height:900px;width:100%;" id="sg_ifr"></iframe>';
	}

	function parse_http_response_header(array $headers){
	    $responses = array();
	    $buffer = NULL;
	    foreach ($headers as $header)
	    {
	        if ('HTTP/' === substr($header, 0, 5))
	        {
	            // add buffer on top of all responses
	            if ($buffer) array_unshift($responses, $buffer);
	            $buffer = array();

	            list($version, $code, $phrase) = explode(' ', $header, 3) + array('', FALSE, '');

	            $buffer['status'] = array(
	                'line' => $header,
	                'version' => $version,
	                'code' => (int) $code,
	                'phrase' => $phrase
	            );
	            $fields = &$buffer['fields'];
	            $fields = array();
	            continue;
	        }
	        list($name, $value) = explode(': ', $header, 2) + array('', '');
	        $name = strtoupper($name);
	        if (isset($fields[$name])){
	            $value = $fields[$name].','.$value;
	        }
	        $fields[$name] = $value;
	    }
	    unset($fields); // remove reference
	    array_unshift($responses, $buffer);
	    return $responses;
	}
?>

<?php if (isset($tripzilla_iframe)) { ?>
	<div class="sidebar-widget row type-1">
		<div class="inner">
			<div class="widget-title" style="margin-bottom:20px !important;"><h4>TOUR PACKAGES</h4></div>
			<?php echo $tripzilla_iframe; ?>
		</div>
	</div>
<?php } ?>
<script type="text/javascript">
	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";	
	var eventer = window[eventMethod];	
	var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
	eventer(messageEvent, function (e) {
			if (e.origin == 'http://tripzilla.sg' || e.origin == 'http://tripzilla.ph') {
			var iframeHeight = e.data;			
		    document.getElementById("sg_ifr").style.height = iframeHeight+'px'; 
		}		          
	}, false);	
</script>