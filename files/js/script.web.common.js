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

$('#openDDcursos2018').click(function(){
  if ($('.leftDDcursos2018').hasClass('Hidden')) {
    $('.leftDDcursos2018').removeClass('Hidden');
  } else {
    $('.leftDDcursos2018').addClass('Hidden');
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

//////////////////////////////////////////////////// Get Vars From URL ////////////////////////////////////////////////////
function getVars(){
    var loc = document.location.href;
    var getString = loc.split('?');
    if(getString[1]){
        var GET = getString[1].split('&');
        var get = {};//This object will be filled with the key-value pairs and returned.

        for(var i = 0, l = GET.length; i < l; i++){
            var tmp = GET[i].split('=');
            get[tmp[0]] = unescape(decodeURI(tmp[1]));
        }
        return get;
    }else{
        return "";
    }
}
var $get = getVars();
