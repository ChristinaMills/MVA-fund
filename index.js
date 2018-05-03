
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y < 500) {
    $('.navbar').css({'background-color' : '', 'opacity': '1'});
    $('.menu > a').css('color', 'white');
    $('#nav-logo > img').css('height', '0em');
  } 
  else if (y > 500) {
    $('.navbar').css('background-color', 'rgba(255,255,255, 0.9)');
    $('.menu > a').css('color', 'black');
    $('#nav-logo > img').css('height', '3.5em');
  }
});