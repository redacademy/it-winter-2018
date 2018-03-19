(function ($) {

  console.log("this is working");
  
  if (window.matchMedia('(max-width: 480px)').matches) {
    $('.hire-us-grid').flickity();
  };

  $('.banner-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    // complete: alert('done!')

  });

})(jQuery);
