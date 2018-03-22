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

  $('.show-events-page').setAttribute('style', '');

})(jQuery);