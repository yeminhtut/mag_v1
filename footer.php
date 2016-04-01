<?php global $newmagz_option; ?>

<!-- Start : Footer Section -->
<footer id="colofone" class="footer">

<div id="footer-menu-section">
    <div class="container clearfix">
        <?php 
        $check_mobile = detect_mobile();        
        switch ($check_mobile) {
            case 'true':
                get_template_part('partials/footer/footer', 'mobile');  
                break;          
            default:
                get_template_part('partials/footer/footer', 'web'); 
                break;
        }       
        ?>
    </div>
</div>

<?php if ( is_active_sidebar('warrior-footer') ) { ?>
    <div id="footer-bottom">
        <div class="container clearfix">
            <div class="footer-widgets">
                <div class="row">
                <?php 
                // Footer Widgets
                dynamic_sidebar( 'warrior-footer' );
                ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
    if( esc_attr( $newmagz_option['display_back_to_top'] ) ) { echo '<a id="scroll-top" href="#top"><span class="fa fa-angle-up"></span></a>'; }  // display back to top section
?>
</footer>

<?php 
    // if ($check_mobile == false) {
    //     get_template_part('partials/widgets/widget','catfish'); 
    // }
?>
<!-- End : Footer Section -->
<?php wp_footer(); ?>
<div id="magazine_modal"></div>
<!-- <script type='text/javascript' src='/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script> -->
<script   src="https://code.jquery.com/jquery-1.12.2.min.js"   integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk="   crossorigin="anonymous"></script>
<script type='text/javascript' async src='<?= get_site_url()?>/wp-includes/js/jquery/ui/widget.min.js'></script>
<script type='text/javascript' async src='<?= get_site_url()?>/wp-includes/js/jquery/ui/tabs.min.js'></script>
<script type='text/javascript' src='<?= get_template_directory_uri()?>/js/plugin.js'></script>
<script type='text/javascript' async src='<?= get_template_directory_uri()?>/js/functions.js'></script>
<script type='text/javascript' async src='<?= get_template_directory_uri()?>/js/custom.js?25'></script>
<!--<script type='text/javascript' async src='<?= get_template_directory_uri()?>/js/jquery.backstretch.min.js'></script>
<script type='text/javascript' async src='<?= get_template_directory_uri()?>/js/custom_background.js?02'></script>
<script src="<?php// bloginfo('template_directory'); ?>/js/map_multiple_marker.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri()?>/js/catfish.js?22"></script>
<script type="text/javascript" src="<?= get_template_directory_uri()?>/js/banner_click.js?11"></script>-->

<?php if (is_singular()) { ?>
    <script type='text/javascript' async src='<?= get_template_directory_uri()?>/js/scrollspy.js'></script>
    <script type='text/javascript' async src='<?= get_template_directory_uri()?>/js/jquery.history.js'></script>
    <script type="text/javascript" async src="<?= get_template_directory_uri()?>/js/autoload.js"></script>
<?php } ?>

<?php 
    $country_code = get_geoIP();   
    if ($country_code == 'SG') { ?>
        <script type="text/javascript" src="<?= get_template_directory_uri()?>/js/fz_api.js"></script>
<?php } ?>



<!--css-->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400%2C700%2C900%2C100italic%2C300italic%2C400italic%2C700italic%2C900italic%7CRoboto%3A700%7CMerriweather%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic%2C900italic&ver=1449733203">
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700italic' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" type="text/css" href="/web/landing_fonts/stylesheet.css"> -->
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri()?>/style.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri()?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri()?>/css/cssminified.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri()?>/css/extra.css?31">

<script type="text/javascript">
// jQuery(document).ready(function($) {    
//     var content_height = $('#contact_us_wrapper').height();
//     if ( content_height != null && $(window).height() > content_height) {
//         //$('footer').css({'position': 'absolute','bottom': '0'});
//     };
//     // tabs widget
//     $('.city-tabs-widget .tabs_container').each(function() {
//       var defaultHeightSelector = $(this).parent().find('.tab-nav-city a.active').attr('data-content');
//       var defaultHeight = $(defaultHeightSelector).outerHeight();
//       $(this).height(defaultHeight);
//     });

//     $('.city-tabs-widget .tab-nav-city a').on('click', function() {
//         var tabContent = $(this).attr('data-content');
//         var tabHeight = $(tabContent).outerHeight();
//         $('.city-tabs-widget .tab-nav-city a').removeClass('active')
//         $(this).addClass('active');
//         $('.city-tabs-widget .tabs_container').height(tabHeight);
//         $('.tab-content-city').fadeOut();
//         $(tabContent).fadeIn();
//       });
//     var subscribe_process_url = "<?= get_site_url() ?>/wp-content/plugins/mag-from-helper/processing/subscribe-process.php";   
//     //subscribe bottom//
//     $('#email-input-bottom').bind('keypress', function(e) {
//         var code = e.keyCode || e.which;
//         if (code == 13) {
//             processing_submission_from_bottom(subscribe_process_url);
//         }
//     });
//     $('#suscribe_btn_bottom').click(function($) {        
//         processing_submission_from_bottom(subscribe_process_url);        
//     });

//     $('#email-input-on-widget').bind('keypress',function(e){
//         var code = e.keyCode || e.which;
//         if (code == 13) {
//             processing_submission_from_sidebar(subscribe_process_url);
//         };
//     });

//     $('#suscribe_btn_sidebar').click(function(){            
//             processing_submission_from_sidebar(subscribe_process_url);
//         });
//     //Ads Submit
//     $('#ads-submit').click(function() {
//           $("#ads_form")
//             .off( "click", "#ads-submit", flash )
//             .find( "#ads-submit" )
//             .text( "Processing" );
//         advertisement_processing($);
//     });

//     $('#suscribe_btn').click(function(){            
//             //subscribe_popup_processing();
//         });
// });
// function flash() {
//   $( "div" ).show().fadeOut( "slow" );
// }
// function subscribe_popup_processing(){
//     var email = $('#email-input').val();            
//             $.ajax({
//                 type: "POST",
//                 url: "/wp-content/plugins/mag-from-helper/processing/subscribe-process.php",
//                 data: {
//                     email: email
//                 },
//                 dataType: "html",
//                 success: function(data) {
//                     if(data=='n'){
//                         $("#subscribe-error").html("<b>Please fill your email</b>");                        
//                         setTimeout(function(){$('#subscribe-error').html('');},5000);                       
//                     }
//                     else if(data=='y'){
//                         $('#subscribe-form').hide();
//                         $('#subscribe-success').html("<b>You have subscribed succefully");
//                         $.cookie("magSubscribed", 1, {
//                             expires: 14,path:'/'
//                          });
//                         setTimeout(function(){
//                             $("#mag-model").remove();
//                             },5000);
//                         $('html, body').css({
//                             'overflow': 'auto',
//                             'height': 'auto'
//                         });                 
//                     }
//                     else if(data=='exist'){
//                         $("#subscribe-error").html("<b>You have already subscribed</b>");
//                         $('#subscribe-form').hide();
//                         $.cookie("magSubscribed", 1, {expires: 14,path:'/'});
//                         setTimeout(function(){
//                             $("#mag-model").remove();
//                             },5000);
//                         $('html, body').css({
//                             'overflow': 'auto',
//                             'height': 'auto'
//                         }); 
//                     }
//                 },
//                 complete: function() {
//                     $('#loading-image').hide();
//                 }
//             }); 
// }
// function advertisement_processing($){
//         var request_url = "<?= $_SERVER['REQUEST_URI'] ?>";
//         var name = $('#ads_name').val();
//         var email = $('#ads_email').val();
//         var subject = 'advertisement enquiry';
//         var company = $('#ads_company').val();
//         var ph = $('#ads_ph').val();
//         var type = 'advertise';
//         var redirect_url = '';
//         var enquiry_content = $('textarea#ads_enquiry').val();
//         $.ajax({
//             type: "POST",
//             url: "<?= get_site_url()?>/wp-content/plugins/mag-from-helper/processing/ads-process.php",
//             data: {email: email,name: name,subject: subject,company: company,ph: ph,enquiry_content: enquiry_content,type: type,redirect_url: redirect_url,request_url:request_url},
//             dataType: "html",
//             success: function(data) {
//                 if (data == 'n') {
//                     $("#ads-error").html("<b>Please fill all required fields</b>");
//                     setTimeout(function() {
//                         $('#ads-error').html('');
//                     }, 5000);
//                 } else if (data == 'y') {
//                     $('#ads_form').hide();
//                     $('#ads-success').html("<b>Your enquiry has been sent</b>");
//                     setTimeout(
//                         function() {
//                             jQuery('#email-input').val('');
//                             $('.pop-up-form-wrap').hide();
//                             $('#magazine_modal').hide();
//                         }, 5000);

//                 } else if (data == 'exist') {
//                     $("#gn-error").html("<b>Please fill all required fields</b>");
//                     $("#gn-error").html("<b>sending again</b>")
//                     setTimeout(
//                         function() {
//                             $('#ads_form input').html('');
//                         }, 5000);
//                 }
//             },
//             complete: function() {
//                 $('#loading-image').hide();
//             }
//         });
// }

// function call_signup_dialog($) {
//     var lyr_cont = jQuery($('#dialog-form'));
//     var lyr_cont_height = lyr_cont.height();
//     if ($(window).height() > lyr_cont_height) {
//         lyr_cont.css("top", "50%");
//         lyr_cont.css("margin-top", "-" + ((lyr_cont_height / 2)) + "px");
//     }
//     var dialogWidth = lyr_cont.width();
//     var windowWidth = $(window).width();
//     lyr_cont.css({
//         left: (windowWidth / 2) - (737 / 2)
//     });
//     setTimeout(function() {
//         $("#mag-model").show();
//         $("#mag-model").css({
//             "width": "100%"
//         });
//         $('#dialog-form').css({
//             "display": "block"
//         });
//         $('.btn-close-splash-btn').show();
//     }, 5000);

//     $('.close-modal').click(function() {
//         $.cookie("magSubscribed", 1, {
//             expires: 1,
//             path: '/'
//         });
//         $("#mag-model").hide();
//         $('#dialog-form').hide();
//         $('.btn-close-splash-img').hide();
//         $('.btn-close-splash-btn').hide();
//         $('html, body').css({
//             'overflow': 'auto',
//             'height': 'auto'
//         });
//     });
// };

// function processing_submission() {
//     var email = jQuery('#email-input-on-widget').val();
//     jQuery.ajax({
//         type: "POST",
//         url: subscribe_process_url,
//         data: {
//             email: email
//         },
//         dataType: "html",
//         success: function(data) {
//             if (data == 'n') {
//                 jQuery("#subscribe-error").html("<i>Please fill your email</i>");
//                 jQuery("#ads-banner").css('min-height', '340px');
//                 setTimeout(function() {
//                     jQuery('#subscribe-error').html('');
//                     jQuery("#ads-banner").css('min-height', '312px')
//                 }, 5000);
//             } else if (data == 'y') {
//                 jQuery('#subscribe-form-on-sidebar').hide();
//                 jQuery('#subscribe-success').html("<b>You have subscribed successfully");
//                 setTimeout(function() {
//                     jQuery('#subscribe-success').html('');
//                     jQuery('#email-input-on-widget').val('');
//                     jQuery('#subscribe-form-on-sidebar').show();
//                 }, 5000);
//             } else if (data == 'exist') {
//                 jQuery("#subscribe-error").html("<b>You have already subscribed</b>");
//                 jQuery('#subscribe-form-on-sidebar').hide();
//                 setTimeout(function() {
//                     jQuery('#subscribe-error').html('');
//                     jQuery('#email-input-on-widget').val('');
//                     jQuery('#subscribe-form-on-sidebar').show();
//                 }, 5000);
//             }
//         },
//         complete: function() {
//             jQuery('.form-button-on-widget').html('SUBSCRIBE');
//         }
//     });
// }

// function processing_submission_from_sidebar(subscribe_process_url) {
//     jQuery(function($) {
//         var email = $('#email-input-on-widget').val();        
//         $.ajax({
//             type: "POST",
//             url: subscribe_process_url,
//             data: {
//                 email: email
//             },
//             dataType: "html",
//             success: function(data) {
//                 if (data == 'n') {
//                     $("#ads-banner #subscribe-error").html("<b>Please fill your email</b>");
//                     setTimeout(function() {
//                         $('#ads-banner #subscribe-error').html('');
//                     }, 5000);
//                 } else if (data == 'y') {
//                     $('#ads-banner #subscribe-form-on-sidebar').hide();
//                     $('#ads-banner #subscribe-success').html("<b>You have subscribed successfully");
//                     $.cookie("magSubscribed", 1, {
//                         expires: 14,
//                         path: '/'
//                     });
//                     setTimeout(function() {
//                         $("#mag-model").remove();
//                     }, 5000);
//                     $('html, body').css({
//                         'overflow': 'auto',
//                         'height': 'auto'
//                     });
//                 } else if (data == 'exist') {
//                     $("#ads-banner #subscribe-error").html("<b>You have already subscribed</b>");
//                     $('#ads-banner #subscribe-form-on-sidebar').hide();
//                     $.cookie("magSubscribed", 1, {
//                         expires: 14,
//                         path: '/'
//                     });
//                     setTimeout(function() {
//                         $("#ads-banner #subscribe-error").html("");
//                         $('#ads-banner #email-input-on-widget').val('');
//                         $('#ads-banner #subscribe-form-on-sidebar').show();
//                     }, 5000);
//                     $('html, body').css({
//                         'overflow': 'auto',
//                         'height': 'auto'
//                     });
//                 }
//             },
//             complete: function() {
//                 $('#loading-image').hide();
//             }
//         });
//     });
// }

// function processing_submission_from_bottom(subscribe_process_url) {
//     var email = jQuery('#email-input-bottom').val();
//     jQuery.ajax({
//         type: "POST",
//         url: "<?= get_site_url()?>/wp-content/plugins/mag-from-helper/processing/subscribe-process.php",
//         data: {email: email},
//         dataType: "html",
//         success: function(data) {            
//             if (data == 'n') {
//                 jQuery("#subscribe-error").html("<i>Please fill your email</i>");
//                 setTimeout(function() {
//                     jQuery('#subscribe-error').html('');
//                 }, 5000);
//             } else if (data == 'y') {
//                 jQuery('#subscribe-form').hide();
//                 jQuery('#subscribe-success').html("<b>You have subscribed successfully");
//                 setTimeout(function() {
//                     jQuery('#subscribe-success').html('');
//                     jQuery('#email-input-bottom').val('');
//                     jQuery('#subscribe-form').show();
//                 }, 5000);
//             } else if (data == 'exist') {
//                 jQuery("#subscribe-error").html("<b>You have already subscribed</b>");
//                 jQuery('#subscribe-form-bottom').hide();
//                 setTimeout(function() {
//                     jQuery('#subscribe-error').html('');
//                     jQuery('#email-input-bottom').val('');
//                     jQuery('#subscribe-form-bottom').show();
//                 }, 5000);
//             }
//         },
//         complete: function() {
//             jQuery('#suscribe_btn_bottom').html('SIGN ME UP!');
//         }
//     });
// }  
</script>
<script type="text/javascript">
//     function _gaLt(event) {

//         /* If GA is blocked or not loaded then don't track */
//         if (!ga.hasOwnProperty("loaded") || ga.loaded != true) {
//             return;
//         }

//         var el = event.srcElement || event.target;

//         /* Loop up the DOM tree through parent elements if clicked element is not a link (eg: an image inside a link) */
//         while (el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href)) {
//             el = el.parentNode;
//         }

//         /* if a link has been clicked */
//         if (el && el.href) {

//             var link = el.href;

//             /* Only if it is an external link */
//             //if (link.indexOf(location.host) == -1 && !link.match(/^javascript\:/i)) {
//                 /* Is target set and not _(self|parent|top)? */
//                 var target = (el.target && !el.target.match(/^_(self|parent|top)$/i)) ? el.target : false;

//                 var hbrun = false; // tracker has not yet run

//                 /* HitCallback to open link in same window after tracker */
//                 var hitBack = function() {
//                     /* run once only */
//                     if (hbrun) return;
//                     hbrun = true;
//                     window.location.href = link;
//                 };

//                 /* If target opens a new window then just track */
//                 if (el.target && !el.target.match(/^_(self|parent|top)$/i)) {
//                     ga(
//                         "send", "event", "Outgoing Links", link,
//                         document.location.pathname + document.location.search
//                     );
//                 } else {
//                     /* send event with callback */
//                     ga(
//                         "send", "event", "Outgoing Links", link,
//                         document.location.pathname + document.location.search, {
//                             "hitCallback": hitBack
//                         }
//                     );

//                     /* Run hitCallback if GA takes too long */
//                     setTimeout(hitBack, 1000);

//                     /* Prevent standard click */
//                     event.preventDefault ? event.preventDefault() : event.returnValue = !1;
//                 }
//             //}

//         }
//     }

//     /* Attach the event to all clicks in the document after page has loaded */
//     var w = window;
//     w.addEventListener ? w.addEventListener("load", function() {
//         document.body.addEventListener("click", _gaLt, !1)
//     }, !1) : w.attachEvent && w.attachEvent("onload", function() {
//         document.body.attachEvent("onclick", _gaLt)
//     });
</script>
</body>
</html>










