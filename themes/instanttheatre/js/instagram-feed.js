(function ($) {

  // https://github.com/adrianengine/jquery-spectragram/wiki/How-to-get-Instagram-API-access-token-and-fix-your-broken-feed

  var spectagramComplete = function () {

      $(window).on("load", function () {
          createCarousel();
      });

  };

  var createCarousel = function () {

      $('.instagram-feed').flickity({
        // options
        cellAlign: 'left',
        contain: true
      });

  };

  var Spectra = {
      instaToken: '2111689104.c242e8f.a220028a10084642b234b5b04ed3dea9',
      instaID: 'c242e8f88adb4b50a6b9849d1f5c2e8f',

      init: function () {
          $.fn.spectragram.accessData = {
              accessToken: this.instaToken,
              clientID: this.instaID
          };

          $('.instagram-feed').spectragram('getUserFeed',{
            max: 10,
            query: 'instanttheatre',
            wrapEachWith: '<div class="photo">',
            complete: spectagramComplete()
          });
      }
  };

  Spectra.init();

})(jQuery);