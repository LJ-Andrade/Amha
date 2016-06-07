$( document ).ready(function() {
  // Wow Image Loader On Scroll //
  new WOW().init();

});

///// STYLE OPTION MENU///////
// Left Options Side Menu //
$('.viewStylesInner').click(function() {
  $('#viewStyles').toggleClass('viewStylesMarg');
});

// $('#cambioCabecera').click(function() {
//   if ($('#topBar').hasClass('container-fluid')) {
//       $('#topBar').removeClass('container-fluid');
//       $('#topBar').addClass('container');
//   } else if ($('#topBar').hasClass('container')) {
//       $('#topBar').removeClass('container');
//       $('#topBar').addClass('container-fluid');
//   }
// });

// Show header Styles variant
$('#cambioCabecera').click(function() {
  if ($('#topBar').hasClass('container-fluid'))  {
      $('#topBar').removeClass('container-fluid');
      $('#topBar').addClass('container');
  } else if ($('#topBar').hasClass('container')) {
      $('#topBar').removeClass('container');
      $('#topBar').addClass('container-fluid');
  }

  if ($('#topHead').hasClass('container-fluid'))  {
      $('#topHead').removeClass('container-fluid');
      $('#topHead').addClass('container');
  } else if ($('#topHead').hasClass('container')) {
      $('#topHead').removeClass('container');
      $('#topHead').addClass('container-fluid');
  }

  if (!$('header').hasClass('headerBackground'))  {
      $('header').addClass('headerBackground');
  } else {
      $('header').removeClass('headerBackground');
  }
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
