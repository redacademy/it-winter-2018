jQuery(document).ready(function($) {

  //ISOTOPE filtering plug-in
  // initialise
  var grid = $('.person-gallery').isotope({
    // options
    itemSelector: '.person-tile',
    layoutMode: 'fitRows'
  });

  // initialise filter buttons
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    grid.isotope({ filter: filterValue });
  });

  $('.tax-role .filter-btn').on('click', function(){
    $('.tax-role .filter-btn').removeClass('selected');
    $(this).addClass('selected');
  });



  //Display overlay when person tile is clicked

  //WP Rest API call retrieves person information
  $('.person-tile').on('click', function (e) {
    e.preventDefault();

    //Get Post ID from element ID (i.e. #postid-61 )
    var postID = $(this).attr('id').match(/\d+$/)[0];
    
    $.ajax({
      method: 'GET',
      url: api_vars.root_url + 'wp/v2/post_people/' + postID + '?_embed',
      success: function( response ) {
        
        //Response data
        var title = response.title.rendered;
        var description = response.content.rendered;
        var featured_image = response._embedded["wp:featuredmedia"]["0"].source_url;
        var facebook_link = response.facebook_link;
        var twitter_link = response.twitter_link;
        var instagram_link = response.instagram_link;

        //Update overlay content
        $('#portrait').attr({
          src: featured_image,
          alt: 'portrait of ' + title });
        $('.person-title').text( title );

        $('.social-links a[class|="social"').hide();
        if( facebook_link !== "" ) {
          $('.social-facebook').show().attr( 'href', facebook_link );
        }
        if( twitter_link !== "" ) {
          $('.social-twitter').show().attr( 'href', twitter_link );
        }
        if( instagram_link !== "" ) {
          $('.social-instagram').show().attr( 'href', instagram_link );
        }
        
        $('.person-description').text( $(description).text() ); //Stript HMTL tags

        //Reveal overlay
        $('.overlay').addClass('m-fadeIn');
      },
      error: function() {}
    });
  });

  //Close the overlay
  $('.overlay').on('click', function() {
    $('.overlay').removeClass('m-fadeIn');
  });

})