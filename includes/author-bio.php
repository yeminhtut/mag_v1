<?php 
	if ( function_exists( 'get_coauthors' ) ) {	 echo dual_author_bio(); }
	else{ echo single_author_bio(); }
?>