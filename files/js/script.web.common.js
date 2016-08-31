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
    if ($(window).scrollTop() > 230) {
        $('.leftFloatMenu').addClass('leftFloatMenuFixed');
    }else{
      $('.leftFloatMenu').removeClass('leftFloatMenuFixed');
    }
});

// DropDown
$('#openDDsociosBenef').click(function(){
  if ($('.leftDDSociosBenef').hasClass('Hidden')) {
    $('.leftDDSociosBenef').removeClass('Hidden');
  } else {
    $('.leftDDSociosBenef').addClass('Hidden');
  }
})

$('#openDDsociosBenef2').click(function(){
  if ($('.leftDDSociosBenef').hasClass('Hidden')) {
    $('.leftDDSociosBenef').removeClass('Hidden');
  } else {
    $('.leftDDSociosBenef').addClass('Hidden');
  }
})

$('#openDDcarreras').click(function(){
  if ($('.leftDDcarreras').hasClass('Hidden')) {
    $('.leftDDcarreras').removeClass('Hidden');
  } else {
    $('.leftDDcarreras').addClass('Hidden');
  }
})

$('#openDDcursos').click(function(){
  if ($('.leftDDcursos').hasClass('Hidden')) {
    $('.leftDDcursos').removeClass('Hidden');
  } else {
    $('.leftDDcursos').addClass('Hidden');
  }
})

$('#openDDcarreras2').click(function(){
  if ($('.leftDDcarreras').hasClass('Hidden')) {
    $('.leftDDcarreras').removeClass('Hidden');
  } else {
    $('.leftDDcarreras').addClass('Hidden');
  }
})

$('#openDDcursos2').click(function(){
  if ($('.leftDDcursos').hasClass('Hidden')) {
    $('.leftDDcursos').removeClass('Hidden');
  } else {
    $('.leftDDcursos').addClass('Hidden');
  }
})

////// Get File name from Url //////
var url      = window.location.href;
var filename = url.split('/').pop().split('#')[0].split('?')[0];

//////////////////////////////////////////////////// Validation ///////////////////////////////////////////////////////////////
var validate    = new ValidateFields();

$(function(){
  validate.createErrorDivs();

  $(validateElements).change(function(){
      validate.validateOneField($(this));
  });
});

/////////////////////////////////// ACCORDION ///////////////////////////////////////////
$(function(){
  $('.accordion').click(function(){
    if ($(this).children('.accordionInfo').is(':hidden')) {
      $('.accordionInfo').slideUp();
      $(this).children('.accordionInfo').slideDown();
    }
  });
});
