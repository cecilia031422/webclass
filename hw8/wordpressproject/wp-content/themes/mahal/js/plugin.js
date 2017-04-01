//Back To Top
var $j = jQuery.noConflict();
$j(function() {
  $j('#top').click(function() {
    $j('body,html').animate({scrollTop:0},800);
  });  
});

//Menu
var $j = jQuery.noConflict();
$j( ".menu-toggle").click(function() {
  $j( ".menu" ).slideToggle();
});