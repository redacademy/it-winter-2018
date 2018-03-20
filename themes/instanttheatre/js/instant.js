(function ($) {
  //search bar
  var $searchInput = $('.search #hamburger-search');
  $searchInput.hide();

  $('.search #search-button').on('click', function (evt) {
    evt.preventDefault();
    $searchInput.show('slow');
    $searchInput.focus();

    $(document).on('keypress', function (event) {
      if ($searchInput.val() !== '') {
        if (event.which == 13) {
          $('.desktop-search-field').submit();
        }
      }
    });

  });
  $searchInput.on('blur', function () {
    $searchInput.hide(500);
  });

  /**
   * Resize viewport and trigger some nav mods
   */
  // var  resizeTimeout;
  // $(window).on('resize', function () {


  //   clearTimeout(resizeTimeout);
  //   resizeTimeout = setTimeout(resizle, 500);


 // }); // .resize

  //function resizle(){
    if (window.matchMedia( '(max-width: 480px)').matches) {
      // console.log('resize event fired');

      $('.selector-nav').on('click', function (e) {
        e.preventDefault();
        $('.selector-nav').find('.sub-menu').hide('fast');
        $(this).children('.sub-menu').slideToggle('fast');
      })
    } else {
      $('.selector-nav').on('hover', function () {
        $('.selector-nav').find('.sub-menu').hide();
        $(this).children('.sub-menu').show();
      })
    }
 // }
if( ($window.width() > 480) && $('#toggle-button').prop('checked', true) ){
  $('#toggle-button').prop('checked', false)
}

$('.sub-menu').on('click', function(){
  console.log('ive been clicked');
})
// }
  // if(window.matchMedia( '(min-width: 480px)').matches){
  //   $('.selector-nav').hover(function(){
  //     $('.selector-nav').find('.sub-menu').hide();
  //     $(this).children('.sub-menu').show();
  //   });
  // }

}(jQuery));

// var acc = document.getElementsByClassName("selector-nav");
// var i;

// for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function(e) {
//         e.preventDefault();
//         this.classList.toggle("active");

//         var panel = this.children;
//         if (panel.style.display === "block") {
//             panel.style.display = "none";
//         } else {
//             panel.style.display = "block";
//         }
//     });
// }

// $('.toggle-menu-wrapper').show('slide', { direction: 'left' }, 2000);

// show("slide", { direction: "left" }, 1000);

// });

// $(".sub-menu").blur(function(){
//   $(".sub-menu").css("display", "none");
// });

// $("#primary-menu").find(".selector-nav").blur(function(e){
//   e.preventDefault();
//   $(this).children(".sub-menu").slideToggle();

// if ($(".sub-menu").css("display", "block")){
//     $(".sub-menu").css("display", "none")
// }else{
//   $(".sub-menu").css("display", "block")
// };
//   $("#primary-menu").find(".selector-nav").blur(function(){
//     $(this).children(".sub-menu").slideToggle();
// });


// $(this).children("sub-menu").blur(function(){
//   $(this).children(".sub-menu").css("display: block");
// });

// $("#primary-menu").find(".selector-nav").blur(function(){
//   $(this).children(".sub-menu").slideToggle("slow");
// });

// var panel = $(".sub-menu")
// if (panel.style.display === "block") {
//     panel.style.display = "none";
// } else {
//     panel.style.display = "block";
// }


// $(this).not().children("sub-menu").slideToggle("slow");
// $(this).children("sub-menu").blur(function(){
//   hide();
// });

// $(".selector-nav").not($(this).children(".sub-menu")).slideUp("slow");

//   this.classList.toggle("active");
//     var panel = this.nextElementsibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     }else{
//       panel.style.display = "block";
//     }
// });