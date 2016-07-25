$( document ).ready(function() {
  // Wow Image Loader On Scroll //
  new WOW().init();

});

///// STYLE OPTION MENU///////
// Left Options Side Menu // NOW HIDDEN
$('#viewStyles').hide();
$('.viewStylesInner').click(function() {
  $('#viewStyles').toggleClass('viewStylesMarg');
});


/////////  Top Options Bar responsivity /////////////
function TopOptions() {
  if (screen.width < 350) {
       $("#TopOptions").removeClass('pull-xs-right');
       $("#TopOptions").addClass('topOptionsMobile col-xs-12');
   }
   else {

   }
}
TopOptions();

//////////// Left Floating Menu //////////////////
$(window).scroll(function() {
    if ($(window).scrollTop() > 207) {
        $('.leftFloatMenu').addClass('leftFloatMenuFixed');
    }else{
      $('.leftFloatMenu').removeClass('leftFloatMenuFixed');
    }
});


////// Get File name from Url //////
var url      = window.location.href;  
var filename = url.split('/').pop().split('#')[0].split('?')[0];
