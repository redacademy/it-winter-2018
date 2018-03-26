jQuery(document).ready(function($){

  /*********************
 * on reload, if home page, add (big header)
*********************/
  // $(window).on('load', function(){
    if($('body').hasClass('home') ){
      $('body').addClass('front-page');
    }    
    if( $(window).width() < 480 ) {
      console.log('captain, were below 480');
      $('.sub-menu').css('display', 'none')
      $('.menu-item-has-children').on('click', hamburgerMenu)
    }else{
      console.log('captain, were above 480');
      $('.sub-menu').css('display', 'none')
     $('.menu-item-has-children').on('hover', desktopMenu)
    }
  // })
  
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

/******************
 * Window resize set TO
 */
$(window).resize(function() {
  if(this.resizeTO) clearTimeout(this.resizeTO);
  this.resizeTO = setTimeout(function() {
      $(this).trigger('resizeEnd');
  }, 500);
});

$(window).bind('resizeEnd', function() {

   if( $(window).width() < 480 ) {
     console.log('captain, were below 480');
     $('.sub-menu').css('display', 'block')
     $('.sub-menu').hide()
     $('.menu-item-has-children').off('hover', desktopMenu)
     $('.menu-item-has-children').on('click', hamburgerMenu)
   }else{
     console.log('captain, were above 480');
     $('.sub-menu').css('display', 'none')
    $('.menu-item-has-children').off('click', hamburgerMenu)
    $('.menu-item-has-children').on('hover', desktopMenu)
   }

});

function hamburgerMenu(e) {
    e.preventDefault();
    $('.sub-menu').removeClass('active');
      $('.menu-item-has-children').not(this).find('.sub-menu').hide();
    
      $(this).find('.sub-menu').addClass('active');
      $('.active').slideToggle();
      $('.active').on('click', 'a', function(){
        var linkUrl = $(this).attr('href');
         window.location.href = linkUrl;
     });
}

function desktopMenu() {
  $('.sub-menu').css('display', 'flex')
  $('.sub-menu').removeClass('active');
  $('.menu-item-has-children').find('.sub-menu').hide();
  $(this).children('.sub-menu').show();
}




})//document ready, jquery