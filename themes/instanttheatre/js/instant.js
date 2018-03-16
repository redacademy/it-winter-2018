
//   $(document).ready(function($) {
//     $("#primary-menu").find(".selector-nav").on("focus", function(e){
//       e.preventDefault();
//       $(this).children(".sub-menu").slideToggle("slow");
//     });//click function
// });//document ready


  // $('#toggle-button').on('click', function(e){
  //   e.preventDefault();
  //   $('.toggle-menu-wrapper').animate({width: 'toggle'});
  // });

  $('')

$('#toggle-button').on('click', function(){
  console.log('checked');
});

var $searchInput = $('.desktop-search .desktop-search-field');
$searchInput.hide();

$('.desktop-search .desktop-search-button').on('click', function (evt) {
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

