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
