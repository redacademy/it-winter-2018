$(document).ready(function() {

  // Inititalise Isotope filter
  // $('.person-gallery').isotope({
  //   // options
  //   itemSelector: '.person-tile',
  //   layoutMode: 'fitRows'
  // });

  

  // init Isotope
  var grid = $('.person-gallery').isotope({
    // options
    itemSelector: '.person-tile',
    layoutMode: 'fitRows'
  });
  console.log('grid: ' + grid);

  // $grid.isotope({ filter: '.role-alumni' });

  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    console.log( 'filterValue:' + filterValue );
    grid.isotope({ filter: filterValue });
  });

})