//Function for creating cookies
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
} //Function for reading cookies


function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');

  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];

    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }

    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }

  return "";
}


jQuery(function ($) {
  $(document).ready(function () {

  //********** COOKIE CONSENT **********//
      //Set the cookie when consent is provided for cookies
      $('#cookieNotification #accept').on('click', function () {
        setTimeout(function () {
          $('#cookieNotification').fadeOut();
        }, 500);
        setCookie('cookie_consent', true, 30);
      }); //Behavior for showing/hiding the cookie consent

      if (getCookie('cookie_consent') != 'true') {
        $('#cookieNotification').fadeIn();
      }

  
  /////////////////  PUSH DOWN FOOTER  \\\\\\\\\\\\\\\\\
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');

  ///////////////// CLOSE THE MOBILE NAV LINK ON LINK TO A PAGE  \\\\\\\\\\\\\\\\\
  $('.dropdown-menu a').on('click', function() {
    $('#modalNav').modal('hide');
  });

  ///////////////// MOBILE MENU NAV ICON ANIMATION  \\\\\\\\\\\\\\\\\
  $('#navIcon').click(function(){
    $(this).toggleClass('open');
  });

  ///////////////// PUSH IMAGE TO EDGE  \\\\\\\\\\\\\\\\\
  if ( $(window).width() >= 992 ) {
    var offset = $('#content .container').offset();
      $('.offset-left').css('padding-left', ( Math.ceil(offset.left) + 15 ) + 'px');
      $('.offset-right').css('padding-right', ( Math.ceil(offset.left) + 15 ) + 'px');

      //Force a section to be the width of column plus the gutter (left or right)
      var pushToLeftWidth = $('.push-to-left-edge').outerWidth();
      $('.push-to-left-edge .outer-wrapper').css('width', (Math.ceil(offset.left) - 15 + pushToLeftWidth ) + 'px');

      //Don't subtract the 15 pixels for padding due to the checkerboard pattern on the image above
      $('#homepage #sectionFour .push-to-left-edge .outer-wrapper').css('width', (Math.ceil(offset.left) + 12 + pushToLeftWidth ) + 'px');

      $('.push-to-right-edge').each(function() {
        var pushToRightWidth = $(this).outerWidth();
        var height = $(this).prev().height();
        $(this).find('.outer-wrapper').css({'width':(Math.ceil(offset.left) - 15 + pushToRightWidth ) + 'px', 'height':height});
      });

  }

  ///////////////// MOVE THE HERO CONTENT DOWN BASED ON ABSOLUTE POSITIONED HEADER \\\\\\\\\\\\\\\\\
  //var headerHeight = $('#wrapper-navbar').height();
  //$('.hero .inner-container').css('margin-top', (headerHeight/2) + 'px');

  ///////////////// CONTAIN CONTAINERLESS SECTIONS ON MOBILE  \\\\\\\\\\\\\\\\\
  if ($(window).width() < 992) {
  	//$('#lifeStagesLandingPage #hero .content-wrapper').wrap('<div class = "container"><div class = "row"></div></div>');
  	//$('#lifeStagesLandingPage #hero .video-holder').wrap('<div class = "container"><div class = "row"></div></div>');
  	//$('#lifeStagesLandingPage #sectionOne .content-wrapper').wrap('<div class = "container"><div class = "row"></div></div>');
  }

  ///////////////// MATCH HEIGHT OF CONTENT SECTION  \\\\\\\\\\\\\\\\\
  //$('#homepage #sectionFour .bucket .icon-wrapper').matchHeight();


  //RUN AFTER ALL ELEMENTS INCLUDING IMAGES
  //$(window).on("load", function() {

  //}); //end of jQuery 'on load' function


  }); //end of jQuery document ready function
}); //end of jQuery empty function