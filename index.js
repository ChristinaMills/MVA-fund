
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.navbar').css('background-color', 'rgba(137, 194, 153, 0.961)');
    console.log('color should change');
  } 
  else if (y < 500) {
    $('.navbar').css({'background-color' : '', 'opacity': '1'});
  }
});