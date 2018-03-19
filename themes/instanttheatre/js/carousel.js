(function ($) {

  $('.banner-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    // complete: alert('done!')

  });

  if ($(window).width() < 480) {
    $('.hire-us-grid').flickity();
  }

})(jQuery);
