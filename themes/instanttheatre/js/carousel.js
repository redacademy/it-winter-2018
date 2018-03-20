(function ($) {
  
  // if (window.matchMedia('(max-width: 480px)').matches) {
  //   console.log("this is working");
  //   $('.hire-us-grid').flickity();
  // };

  if ($(window).width() < 480) {
    $('.hire-us-grid').flickity({
      prevNextButtons: false
    });
    $('.testimonial-carousel-container').flickity({
      prevNextButtons: false
    })
  }

  $(window).on('resize', function() {
      if ($(window).width() < 480) {
        $('.hire-us-grid').flickity({
          prevNextButtons: false
        });
        $('.testimonial-carousel-container').flickity({
          prevNextButtons: false
        })
      } else {
        $('.hire-us-grid').flickity('destroy');
        $('.testimonial-carousel-container').flickity('destroy');
      }
  });

  $('.banner-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    // complete: alert('done!')

  });

})(jQuery);
