jQuery(document).ready(function($){

  /*********************
 * on reload, if home page, add (big header)
*********************/
  $(window).on('load', function(){
    if($('body').hasClass('home') ){
      $('body').addClass('front-page');
    }    
    console.log($(window).width() );

    // if ( $(window).width() < 480 ){
    //   console.log('below 480');
  
    //   $('.menu-item-has-children').on('click', function (e) {
    //     e.preventDefault();
  
    //     $('.menu-item-has-children').not(this).find('.sub-menu').hide();
  
    //     $('.sub-menu').removeClass('active');
    //     $(this).find('.sub-menu').addClass('active');
    //     $('.active').slideToggle();
        
       
    //     $('.active').on('click', 'a', function(){
    //        var linkUrl = $(this).attr('href');
    //         window.location.href = linkUrl;
    //     });

    //     });
    //    }
   
    //   else{
    //     console.log('above 480');
  
    //     $('.menu-item-has-children').on('hover', function () {
    //       $('.menu-item-has-children').find('.sub-menu').hide();
    //       $(this).children('.sub-menu').show();
  
    //    });//selector-nav hover
    //  }//else

  })
  
  /*********************
 * home page header resize (scroll) event listener
*********************/
  function headerResize() {
    var documentY = window.pageYOffset;

    if ($('body').hasClass('home')) {
      $('body').addClass('front-page');
      if (documentY > 300) {
        $('body').removeClass('front-page');
      } else
        $('body').addClass('front-page');
    }
  }
  window.addEventListener('scroll', headerResize);

$(window).resize(function() {
  if(this.resizeTO) clearTimeout(this.resizeTO);
  console.log('resizing...');
  this.resizeTO = setTimeout(function() {
      $(this).trigger('resizeEnd');
  }, 500);
});

// $(window).bind('resizeEnd', function discoverWidth() {

//   if ( $(window).width() < 480 ){
//     console.log('below 480');

//     $('.menu-item-has-children').on('click',  function (e) {
//       e.preventDefault();

//       $('.menu-item-has-children').not(this).find('.sub-menu').hide();

//       $('.sub-menu').removeClass('active');
//       $(this).find('.sub-menu').addClass('active');
//       $('.active').slideToggle();
//       $('.active').on('click', false);

//       });
//      }
 
//     else{
//       console.log('above 480');
//       $('.sub-menu').removeClass('active');
//       $('.menu-item-has-children').on('hover', function () {
//         $('.menu-item-has-children').find('.sub-menu').hide();
//         $(this).children('.sub-menu').show();

//      });//selector-nav hover
//    }//else
//  });//window resize


$(window).bind('resizeEnd', function() {

   if( $(window).width() < 480 ) {
     console.log('captain, were below 480');
     $('.menu-item-has-children').off('hover', desktopMenu)
     $('.menu-item-has-children').on('click', hamburgerMenu)
   }else{
     console.log('captain, were above 480');
    $('.menu-item-has-children').off('click', hamburgerMenu)
    $('.menu-item-has-children').on('hover', desktopMenu)
   }

});

function hamburgerMenu(e) {
    e.preventDefault();
      $('.menu-item-has-children').not(this).find('.sub-menu').hide();

      $('.sub-menu').removeClass('active');
      $(this).find('.sub-menu').addClass('active');
      $('.active').slideToggle();
      $('.active').on('click', 'a', function(){
        var linkUrl = $(this).attr('href');
         window.location.href = linkUrl;
     });
}

function desktopMenu() {
  $('.sub-menu').removeClass('active');
  $('.menu-item-has-children').find('.sub-menu').hide();
  $(this).children('.sub-menu').show();
}


    //   $('.sub-menu').removeClass('active');
    //   $('.menu-item-has-children').on('hover', function () {
    //     $('.menu-item-has-children').find('.sub-menu').hide();
    //     $(this).children('.sub-menu').show();

    //  });//selector-nav hover


})//document ready, jquery