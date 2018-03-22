(function ($) {

  if ($(window).width() < 480) {
    $('.hire-us-grid').flickity({
      prevNextButtons: false
    });
    $('.testimonial-carousel-container').flickity({
      prevNextButtons: false
    })
    $('.studio-grid').flickity({
      prevNextButtons: false
    })
    $('.community-gallery-images').flickity({
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
        $('.studio-grid').flickity({
          prevNextButtons: false
        })
        $('.community-gallery-images').flickity({
          prevNextButtons: false
        })
      } else {
        $('.hire-us-grid').flickity('destroy');
        $('.testimonial-carousel-container').flickity('destroy');
        $('.studio-grid').flickity('destroy');
        $('.community-gallery-images').flickity('destroy');
      }
  });

  $('.banner-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    // prevNextButtons: false
    // complete: alert('done!')

  });

  // Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function (event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function () {
        // Callback after animation
        // Must change focus!
        // var $target = $(target);
        // $target.focus();
        // if ($target.is(":focus")) { // Checking if the target was focused
        //   return false;
        // } else {
        //   $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
        //   $target.focus(); // Set focus again
        // };
      });
    }
  }
});

})(jQuery);
