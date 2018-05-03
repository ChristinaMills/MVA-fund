
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.navbar').css('background-color', 'rgba(255,255,255, 0.9)');
    $('.menu > a').css('color', 'black')

    console.log('color should change');
  } 
  else if (y < 500) {
    $('.navbar').css({'background-color' : '', 'opacity': '1'});
    $('.menu > a').css('color', 'white')
  }
});