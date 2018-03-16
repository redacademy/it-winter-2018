(function($){



var Spectra = {
  instaToken: '2111689104.c242e8f.a220028a10084642b234b5b04ed3dea9',
  instaID: 'c242e8f88adb4b50a6b9849d1f5c2e8f',
  
  init: function () {
    $.fn.spectragram.accessData = {
      accessToken: this.instaToken,
      clientID: this.instaID
    };
    
    $('.instagram-feed').spectragram('getUserFeed',{
      max: 5,
      query: 'instanttheatre',
      wrapEachWith: '<div class="photo">'
    });
  }
}

Spectra.init();

// generate auth token, uri redirect needs to be set in instagram app
// https://www.instagram.com/oauth/authorize/?client_id=YOUR_CLIENT_ID&redirect_uri=http://codepen.io&response_type=token&scope=public_content

// var Spectra = {
//   instaToken: '2136707.4dd19c1.d077b227b0474d80a5665236d2e90fcf',
//   instaID: '4dd19c1f5c7745a2bca7b4b3524124d0',
  
//   init: function () {
//     $.fn.spectragram.accessData = {
//       accessToken: this.instaToken,
//       clientID: this.instaID
//     };
    
//     $('#instagram-feed').spectragram('getUserFeed',{
//       max: 12,
//       query: 'adrianengine',
//       wrapEachWith: '<div class="photo">'
//     });
//   }
// }


// Spectra.init();

})(jQuery);