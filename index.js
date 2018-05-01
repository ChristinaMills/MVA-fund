// document.querySelector("#submit-button").addEventListener("click", function(event) {
//   event.preventDefault();
// }, false);

// (function(){
//   var timeout;
//   var $window = $(window);
//   var $navbar = $('.navbar');
  
//   $window.on('scroll', function(e){
//     clearTimeout(timeout);
//     console.log("working")
//     timeout = setTimeout(function(){
//       if ($window.scrollTop() < 6650) {
//         $navbar.removeClass('hide');
//         console.log("remove class working")
//       } else {
//         $navbar.addClass('hide');
//         console.log("add class working")

//       }
//     }, 100);
//   });
// }());

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    // $('.bottomMenu').fadeIn();
    console.log("in the if")
  } else {
    // $('.bottomMenu').fadeOut();
    console.log("in the else")
  }
});