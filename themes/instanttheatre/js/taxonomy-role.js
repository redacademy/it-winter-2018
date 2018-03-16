jQuery(document).ready(function($) {

  // init Isotope
  var grid = $('.person-gallery').isotope({
    // options
    itemSelector: '.person-tile',
    layoutMode: 'fitRows'
  });

  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    grid.isotope({ filter: filterValue });
  });

  $('.tax-role .filter-btn').on('click', function(){
    $('.tax-role .filter-btn').removeClass('selected');
    $(this).addClass('selected');
  });

})