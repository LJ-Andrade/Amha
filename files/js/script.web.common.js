$( document ).ready(function() {
  // Wow Image Loader On Scroll //
  new WOW().init();

});

///// Cambiar cabecera ///////
// Abre menu //
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

// Cambio de clases
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
