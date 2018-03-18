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



  //Get person post
  $('.person-tile').on('click', function (e) {
    e.preventDefault();

    var postID = $(this).attr('id').match(/\d+$/)[0];
    
    $.ajax({
      method: 'GET',
      url: api_vars.root_url + 'wp/v2/post_people/' + postID + '?_embed',
      success: function( response ) {
        console.log(response);
        console.log(response._embedded["wp:featuredmedia"]["0"].source_url);
        var title = response.title.rendered;
        var description = response.content.rendered;
        var featured_image = response._embedded["wp:featuredmedia"]["0"].source_url;
      },
      error: function() {}
    });
  });


})