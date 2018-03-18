(function ($) {
//search bar
var $searchInput = $('.desktop-search #desktop-search-field');
$searchInput.hide();

$('.desktop-search #desktop-search-button').on('click', function (evt) {
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

$('.selector-nav').on('click', function(evt){
  evt.preventDefault();
  // $('.selector-nav').find('.sub-menu').find('li').show('a',1000);
});
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

