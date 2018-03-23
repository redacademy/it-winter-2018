(function ($) {

  var showsGrid = $('.show-events-page').isotope({
    itemSelector: '.show-item',
    layoutMode: 'fitRows'
  });

  // Register filter buttons click event
  $('.filter-shows-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    showsGrid.isotope({ filter: filterValue });
  });

  //function to open a new smaller window to share the posts
  function socialWindow(url) {
    var left = (screen.width - 570) / 2;
    var top = (screen.height - 570) / 2;
    var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
    window.open(url,"NewWindow",params);
  }


  var pageUrl = $('.website-url-for-javascript-hidden').text();
  console.log(pageUrl);

  //initilizing share buttons on show page
  
  function setShareLinks() {
    var pageUrl = $('.website-url-for-javascript-hidden').text();
    console.log(pageUrl);
    
    $('.social-share.facebook').on('click', function() {
        var url = 'https://www.facebook.com/sharer.php?u=' + pageUrl;
        socialWindow(url);
    });

    $('.social-share.twitter').on('click', function() {
        var url = 'https://twitter.com/intent/tweet?url=' + pageUrl;
        socialWindow(url);
    })();


}


})(jQuery);