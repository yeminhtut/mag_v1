jQuery(function(){
  if (!jQuery.cookie("magCatfish")) {      
      setTimeout(function(){
        jQuery('#gonzilla').toggle();
      },10000);
  } 
  jQuery('#hide-gonzilla, .click-gonzilla').click(function(){
    jQuery.cookie("magCatfish", 1, {path:'/'});
    jQuery( "#gonzilla" ).toggle( "slow");
  });
});