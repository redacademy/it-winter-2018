(function ($) {

  if ($(window).width() < 480) {
    $('.hire-us-grid').flickity({
      prevNextButtons: false
    });
    $('.testimonial-carousel-container').flickity({
      prevNextButtons: false
    });
    $('.studio-grid').flickity({
      prevNextButtons: false
    });
    $('.community-gallery-images').flickity({
      prevNextButtons: false
    });
    $('.class-type-gallery').flickity({
      prevNextButtons: false,
      cellAlign: 'left',
      contain: true
    });
    $('.show-cast-container').flickity({
      prevNextButtons: false,
      cellAlign: 'left',
      pageDots: false,
      contain: true
    });
  }

  $(window).on('resize', function() {
      if ($(window).width() < 480) {
        $('.hire-us-grid').flickity({
          prevNextButtons: false
        });
        $('.testimonial-carousel-container').flickity({
          prevNextButtons: false
        });
        $('.studio-grid').flickity({
          prevNextButtons: false
        });
        $('.community-gallery-images').flickity({
          prevNextButtons: false
        });
        $('.class-type-gallery').flickity({
          prevNextButtons: false,
          cellAlign: 'left',
          contain: true
        });

        $('.show-cast-container').flickity('destroy');
        $('.show-cast-container').flickity({
          prevNextButtons: false,
          cellAlign: 'left',
          pageDots: false,
          contain: true
        });
      } 
      else {
        $('.hire-us-grid').flickity('destroy');
        $('.testimonial-carousel-container').flickity('destroy');
        $('.studio-grid').flickity('destroy');
        $('.community-gallery-images').flickity('destroy');
        $('.class-type-gallery').flickity('destroy');

        $('.show-cast-container').flickity('destroy');
        $('.show-cast-container').flickity({
          prevNextButtons: true,
          cellAlign: 'left',
          contain: false,
          pageDots: false
        });
      }
  });

  $('.banner-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
  });
  $('.photo-gallery-container').flickity({
    prevNextButtons: false,
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
  });
  $('.show-cast-container').flickity({
    prevNextButtons: true,
    cellAlign: 'left',
    contain: false,
    pageDots: false
  });



  /*******************
   * Smooth Scrolling
   *******************/
  //Select Hash Links
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
        }, 1000 );
      }
    }
  });

})(jQuery);
