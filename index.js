
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y < 700 ) {
    $('.navbar').css({'background-color' : '', 'opacity': '1'});
    $('.menu a').css('color', 'white');
    $("#nav-logo > img").attr("src","public/images/burg-logo-blur.png");
    $('#nav-logo > img').css('height', '3.5em');
    

  } 
  else if (y > 700) {
    $('.navbar').css('background-color', 'rgba(255,255,255, 0.9)');
    $('.menu a').css('color', 'black');
    $("#nav-logo > img").attr("src","public/images/navbar-logo.png");
    $('#nav-logo > img').css('height', '3.5em');
    console.log("y more than 500, running")
  }
});

console.log('before icon function')

$(document).ready(function() {
  $( "#navigation" ).click(function() {
    console.log('inside icon function');

    $( "#navigation ul").toggle();
    $('#navigation').addClass('navigation-mobile');
    $( ".menu").addClass('ul-mobile')
    $( ".menu a").addClass('menu-text-mobile')
    $('#mobile-nav-logo').css('display', 'inline-block');
  })
});

// if ( style === regular ) {
//   addclass mobile;
// }
// else {
//   addClass regular
// }

