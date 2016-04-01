var main_url = 'http://magdev.tripzilla.com/';
var content_container = 'section#single-post';
var nav_container = 'div.post-navigation';
var post_title_selector = 'h1.post-title';
var curr_url = window.location.href;
var next_post_selector = 'a[rel="prev"]';
var next_post_id = jQuery('a[rel="prev"]').attr('data-id');

jQuery.noConflict();

jQuery(document).ready(function(){
	jQuery('.load_next_post_cls').attr( 'data-url' , window.location.href );
	jQuery('.load_next_post_cls').attr( 'data-title' , window.document.title );
	jQuery('.load_next_post_cls').attr( 'data-next-id' , next_post_id );
	initialise_Scrollspy();
	initialise_history();
});


function initialise_history(){

	// Bind to StateChange Event
    History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
        
        var State = History.getState(); // Note: We are using History.getState() instead of event.state
        
        if (State.url != curr_url) {
        	window.location.reload(State.url);
        }
                
    });
}

function initialise_Scrollspy(){

	jQuery('.load_next_post_cls').on('scrollSpy:exit', load_next_post );
	jQuery('.load_next_post_cls').scrollSpy();

	// spy on post-divider - changes the URL in browser location, loads new post 
	// jQuery('.time_to_change').on('scrollSpy:enter', changeURL_scrollUp ); 
 //    jQuery('.time_to_change').on('scrollSpy:exit', changeURL_scrollUp ); 
 //    jQuery('.post-divider').on('scrollSpy:enter', load_next_post );
 //    jQuery('.post-divider').scrollSpy();
 //    jQuery('.time_to_change').scrollSpy();
}

//load k+1 post content when k title enter to view port
function load_next_post(){
	var el = jQuery(this);
	var this_url = el.attr('data-url');
	var this_title = el.attr('data-title');
	var check_next_post_id = el.attr('data-next-id');

	if ( !check_next_post_id ) return;
	if ( jQuery( "article#post-"+check_next_post_id ).length == 0) {	    
	    console.log('current url is '+ this_url + ' current title is '+ this_title + ' next post id is' + check_next_post_id);
	    doAutoLoad();
	}
	else{
		console.log('already loaded');
	}
}

function doAutoLoad(){
	// grab the url for the new post
	var post_url = jQuery('a[rel="prev"]').attr('href');
	
	if ( !post_url ) return;
	
	// check to see if pretty permalinks, if not then add partial=1
	if ( post_url.indexOf( '?p=' ) > -1 ) {	
		np_url = post_url + '&partial=1'
	} else {
		np_url = post_url + '/partial';
	}
			
	// remove the post navigation HTML
	jQuery(nav_container).remove();

	console.log('no more prev post-navigation');
	jQuery.get( np_url , function( data ) { 
	
		var $post_html = jQuery(data ); 
		
		var $title = $post_html.find( post_title_selector );
		var next_post_data_id = $post_html.find( next_post_selector ).attr('data-id');
		//console.log(next_post_data_id);

		jQuery( content_container ).append( $post_html );
		//FB.XFBML.parse();
		// get the HR element and add the data-title
		// jQuery('hr[data-url="' + post_url + '"]').attr( 'data-title' , $title.text() );
		// jQuery('hr[data-url="' + post_url + '"]').attr( 'data-nextid' , next_post_data_id );
		// jQuery('hr[data-url="' + post_url + '"]').css({"height": "50px", "border": 'none','background':'#FFF'});

		jQuery('.load_next_post_cls').attr( 'data-url' , window.location.href );
		jQuery('.load_next_post_cls').attr( 'data-title' , $title.text() );
		jQuery('.load_next_post_cls').attr( 'data-next-id' , next_post_data_id );
		 	
		// need to set up ScrollSpy on new content
		initialise_Scrollspy();		
	});
	console.log(post_url + ' is loaded when k enter to viewport');
}

function changeURL_scrollUp(){
	var el = jQuery(this);
	var this_nexturl = el.attr('data-nextposturl');
	var this_nexttitle = el.attr('data-nextposttitle');
	var this_url = el.attr('data-url');
	var this_title = el.attr('data-title');
	var offset = el.offset();
	var scrollTop = jQuery(document).scrollTop();
	// if exiting or entering from top, change URL
	if ( ( offset.top - scrollTop ) < 0 ) {
		if (curr_url !== this_nexturl) {
			//change url and document title
			curr_url = this_nexturl;
			History.pushState(null, null, this_nexturl );
			window.document.title = this_nexttitle;
			//send ga tracking
			var ga_url = this_nexturl.replace(main_url, "");
			ga('send', 'pageview', ga_url);
			
			//reload fb 
			//FB.XFBML.parse();
			//change iframe url
			var curr_iframe_url = jQuery('iframe#sg_ifr').attr('src');
			if (curr_iframe_url) {
				//console.log(curr_iframe_url);
				var curr_iframe_keyword = curr_iframe_url.substr(curr_iframe_url.lastIndexOf('/') + 1);
				//console.log(curr_iframe_keyword);
				var newkeyword = jQuery('article#post-'+change_post_id).attr('data-iframe-keyword');
				//var newkeyword = 'singapore';
				var new_iframe_url = curr_iframe_url.replace(curr_iframe_keyword, newkeyword);
				jQuery('#sg_ifr').attr('src',new_iframe_url);    
			};			
		};
	}
	else{
		if (curr_url !== this_url) {
			//change url and document title
			curr_url = this_url;
			History.pushState(null, null, this_url );
			window.document.title = this_title;
			//send ga tracking
			var ga_url = this_url.replace(main_url, "");
			ga('send', 'pageview', ga_url);
			
			//reload fb 
			//FB.XFBML.parse();
			//change iframe url
			var curr_iframe_url = jQuery('iframe#sg_ifr').attr('src');
			if (curr_iframe_url) {
				//console.log(curr_iframe_url);
				var curr_iframe_keyword = curr_iframe_url.substr(curr_iframe_url.lastIndexOf('/') + 1);
				//console.log(curr_iframe_keyword);
				var newkeyword = jQuery('article#post-'+change_post_id).attr('data-iframe-keyword');
				//var newkeyword = 'singapore';
				var new_iframe_url = curr_iframe_url.replace(curr_iframe_keyword, newkeyword);
				jQuery('#sg_ifr').attr('src',new_iframe_url);    
			};	
		};
	}
}

